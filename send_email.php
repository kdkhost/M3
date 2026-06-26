<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$recaptcha_secret = "6Le2B2MrAAAAAGSV3zGFKqM57mR-iV2FScmYdU9q"; // chave secreta v3

$remetente      = ''; // se preencher, vira o From (ex.: "comercial@m3...")
$destinatario   = 'm3solucoeseservicos@gmail.com, contato@m3solucoeseservicos.com.br'; // se preencher, envia SOMENTE para esses e-mails (suporta múltiplos)
$usuario        = 'no_reply@m3solucoeseservicos.com.br';
$senha          = '*p+!}g[[uAdiR[t8';
$host           = 'm3solucoeseservicos.com.br';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // --- reCAPTCHA: aceitar várias chaves de campo ---
    $recaptcha_response =
        $_POST['recaptcha_response']    ?? // seu back-end original
        $_POST['recaptchaResponse']     ?? // seu front usa esse id/possível name
        $_POST['g-recaptcha-response']  ?? // padrão Google
        '';

    if (empty($recaptcha_response)) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Falha na verificação de segurança. Por favor, recarregue a página e tente novamente.',
            'type'    => 'error'
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // --- Verificar token com Google (file_get_contents + fallback cURL) ---
    $recaptcha_url  = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_data = http_build_query([
        'secret'   => $recaptcha_secret,
        'response' => $recaptcha_response
    ]);

    $verify_json = null;

    // 1) via stream (quando allow_url_fopen=On)
    $ctx = stream_context_create([
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => $recaptcha_data,
            'timeout' => 10
        ]
    ]);
    $resp = @file_get_contents($recaptcha_url, false, $ctx);
    if ($resp !== false) {
        $verify_json = $resp;
    } else {
        // 2) fallback via cURL
        if (function_exists('curl_init')) {
            $ch = curl_init($recaptcha_url);
            curl_setopt_array($ch, [
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => $recaptcha_data,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT        => 10,
            ]);
            $verify_json = curl_exec($ch);
            curl_close($ch);
        }
    }

    $recaptcha_result = json_decode($verify_json ?? '{}', true) ?: [];
    $rc_success = (bool)($recaptcha_result['success'] ?? false);
    $rc_score   = (float)($recaptcha_result['score']   ?? 0.0);

    if (!$rc_success || $rc_score < 0.5) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Falha na verificação de segurança (reCAPTCHA). Por favor, tente novamente.',
            'type'    => 'error'
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // Mantive seu setlocale (opcional)
    setlocale(LC_ALL, 'pt_BR.utf-8');

    // --- Entrada (sem FILTER_SANITIZE_STRING, que é depreciado) ---
    $nome     = trim((string)filter_input(INPUT_POST, 'nome',     FILTER_UNSAFE_RAW));
    $email    = trim((string)filter_input(INPUT_POST, 'email',    FILTER_SANITIZE_EMAIL));
    $telefone = trim((string)filter_input(INPUT_POST, 'telefone', FILTER_UNSAFE_RAW));
    $assunto  = trim((string)filter_input(INPUT_POST, 'assunto',  FILTER_UNSAFE_RAW));
    $mensagem = trim((string)filter_input(INPUT_POST, 'mensagem', FILTER_UNSAFE_RAW));

    if ($nome === '' || $email === '' || $mensagem === '') {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Por favor, preencha todos os campos obrigatórios.',
            'type'    => 'error'
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Por favor, insira um e-mail válido.',
            'type'    => 'error'
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // ==== helper para múltiplos destinatários (vírgula/; / quebra de linha) ====
    $addList = static function(PHPMailer $m, string $list, string $method = 'addAddress'): void {
        $parts = preg_split('/[,;\r\n]+/', $list, -1, PREG_SPLIT_NO_EMPTY) ?: [];
        foreach ($parts as $addr) {
            $addr = trim($addr);
            if ($addr !== '' && filter_var($addr, FILTER_VALIDATE_EMAIL)) {
                $m->{$method}($addr);
            }
        }
    };

    $mail = new PHPMailer(true);

    try {
        // --- SMTP (mantido) ---
        $mail->isSMTP();
        $mail->Host       = $host;
        $mail->SMTPAuth   = true;
        $mail->Username   = $usuario;
        $mail->Password   = $senha;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Charset/encoding (mantidos)
        $mail->CharSet  = 'UTF-8';
        $mail->Encoding = 'base64';

        // Remetente/destinatário + Sender (mantendo sua lógica)
        $mail->Sender = $usuario; // ajuda SPF/DMARC

        // From: usa $remetente se preenchido e válido; senão mantém o padrão
        $fromEmail = (filter_var($remetente, FILTER_VALIDATE_EMAIL) ? $remetente : 'contato@m3solucoeseservicos.com.br');
        $mail->setFrom($fromEmail, 'M3 Soluções e Serviços');

        // To: se $destinatario estiver preenchido -> envia SOMENTE para ele(s); senão, usa o padrão
        if (is_string($destinatario) && trim($destinatario) !== '') {
            $addList($mail, $destinatario, 'addAddress'); // suporta múltiplos
        } else {
            $mail->addAddress('contato@m3solucoeseservicos.com.br');
        }

        // Reply-To permanece o e-mail do usuário do formulário
        $mail->addReplyTo($email, $nome);

        // Assunto (mantido)
        $mail->isHTML(true);
        $mail->Subject = '=?UTF-8?B?'.base64_encode('✉ Novo  E-mail:  ' . ($assunto ?: 'Consulta')).'?=';

        // Body HTML (mantido; usando $rc_score)
        $mail->Body = '
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato - M3 Soluções</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #01124a; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
        .header img { max-width: 180px; height: auto; }
        .content { padding: 20px; background-color: #f9f9f9; border-left: 1px solid #ddd; border-right: 1px solid #ddd; }
        .footer { padding: 15px; text-align: center; background-color: #01124a; color: white; border-radius: 0 0 5px 5px; font-size: 12px; }
        .info-label { font-weight: bold; color: #01124a; display: inline-block; width: 80px; }
        .message-box { background-color: white; border: 1px solid #ddd; padding: 15px; margin-top: 10px; border-radius: 4px; }
        hr { border: 0; height: 1px; background-color: #ddd; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://www.m3solucoeseservicos.com.br/images/logo/logo.png" alt="M3 Soluções e Serviços">
    </div>
    
    <div class="content">
        <center>
            <h2 style="color: #01124a;">Novo Contato Recebido</h2>
        </center>
        
        <p><span class="info-label">Nome:</span> '.htmlspecialchars($nome, ENT_QUOTES, 'UTF-8').'</p>
        <p><span class="info-label">E-mail:</span> '.htmlspecialchars($email, ENT_QUOTES, 'UTF-8').'</p>
        <p><span class="info-label">Telefone:</span> '.($telefone ? htmlspecialchars($telefone, ENT_QUOTES, 'UTF-8') : 'Não informado').'</p>
        <p><span class="info-label">Assunto:</span> '.($assunto ? htmlspecialchars($assunto, ENT_QUOTES, 'UTF-8') : 'Consulta').'</p>
        
        <hr>
        
        <h3 style="color: #01124a;">Mensagem:</h3>
        <div class="message-box">'.nl2br(htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8')).'</div>
        
        <hr>
        
        <p>Este contato foi enviado através do formulário do site em '.date('d/m/Y H:i').'.</p>
        <p>Score reCAPTCHA: '.$rc_score.'</p>
    </div>
    
    <div class="footer">
        <p>M3 Soluções e Serviços © '.date('Y').' - Todos os direitos reservados</p>
        <p>Rua Lopo Saraiva, 179 bloco 2 sala 320 - Rio de Janeiro/RJ</p>
    </div>
</body>
</html>';

        // AltBody (mantido; usando $rc_score)
        $mail->AltBody =
            "NOVO CONTATO - M3 SOLUÇÕES\n\n".
            "Nome: $nome\n".
            "E-mail: $email\n".
            "Telefone: ".($telefone ?: 'Não informado')."\n".
            "Assunto: ".($assunto ?: 'Consulta')."\n\n".
            "Mensagem:\n$mensagem\n\n".
            "Enviado em: ".date('d/m/Y H:i')."\n".
            "Score reCAPTCHA: ".$rc_score."\n\n".
            "M3 Soluções e Serviços\n".
            "R: Lopo Saraiva, 179 bl 2 sl 320 - Rio de Janeiro/RJ";

        $mail->send();
        echo json_encode([
            'success' => true,
            'message' => 'Mensagem enviada com sucesso! <br> Em breve entraremos em contato.',
            'type'    => 'success'
        ], JSON_UNESCAPED_UNICODE);

    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode([
            'success' => false,
            'message' => 'Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde ou entre em contato diretamente por telefone.',
            'type'    => 'error'
        ], JSON_UNESCAPED_UNICODE);

        // Log enxuto do erro
        error_log('Erro no envio de e-mail: ' . ($mail->ErrorInfo ?: $e->getMessage()));
    }

} else {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Método não permitido',
        'type'    => 'error'
    ], JSON_UNESCAPED_UNICODE);
}
