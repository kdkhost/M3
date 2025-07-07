<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$recaptcha_secret = "6Le2B2MrAAAAAGSV3zGFKqM57mR-iV2FScmYdU9q"; // Sua chave secreta do reCAPTCHA

// Configurações de cabeçalho para UTF-8
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Primeiro, validar o reCAPTCHA
    $recaptcha_response = $_POST['recaptcha_response'] ?? '';
    
    if (empty($recaptcha_response)) {
        http_response_code(400);
        echo json_encode([
            'success' => false, 
            'message' => 'Falha na verificação de segurança. Por favor, recarregue a página e tente novamente.',
            'type' => 'error'
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // Verificar o token com o Google reCAPTCHA
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response
    ];

    $recaptcha_options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($recaptcha_data)
        ]
    ];

    $recaptcha_context = stream_context_create($recaptcha_options);
    $recaptcha_result = json_decode(file_get_contents($recaptcha_url, false, $recaptcha_context), true);

    if (!$recaptcha_result['success'] || $recaptcha_result['score'] < 0.5) {
        http_response_code(400);
        echo json_encode([
            'success' => false, 
            'message' => 'Falha na verificação de segurança (reCAPTCHA). Por favor, tente novamente.',
            'type' => 'error'
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // Configurar locale para Português Brasileiro
    setlocale(LC_ALL, 'pt_BR.utf-8');
    
    // Coletar e sanitizar dados do formulário mantendo caracteres especiais
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

    // Validação dos campos do formulário
    if (empty($nome) || empty($email) || empty($mensagem)) {
        http_response_code(400);
        echo json_encode([
            'success' => false, 
            'message' => 'Por favor, preencha todos os campos obrigatórios.',
            'type' => 'error'
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode([
            'success' => false, 
            'message' => 'Por favor, insira um e-mail válido.',
            'type' => 'error'
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // Configurar PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'm3solucoeseservicos.com.br';
        $mail->SMTPAuth = true;
        $mail->Username = 'no_reply@m3solucoeseservicos.com.br';
        $mail->Password = '*p+!}g[[uAdiR[t8';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        
        // Configurações de charset e encoding
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        
        // Remetente e destinatário
        $mail->setFrom('contato@m3solucoeseservicos.com.br', 'M3 Soluções e Serviços');
        $mail->addAddress('contato@m3solucoeseservicos.com.br');
        $mail->addReplyTo($email, $nome);

        // Conteúdo do e-mail com codificação UTF-8 explícita
        $mail->isHTML(true);
        $mail->Subject = '=?UTF-8?B?'.base64_encode('✉ Novo  E-mail:  ' . ($assunto ?: 'Consulta')).'?=';
        
        $mail->Body = '
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato - M3 Soluções</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #0056b3; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
        .header img { max-width: 180px; height: auto; }
        .content { padding: 20px; background-color: #f9f9f9; border-left: 1px solid #ddd; border-right: 1px solid #ddd; }
        .footer { padding: 15px; text-align: center; background-color: #0056b3; color: white; border-radius: 0 0 5px 5px; font-size: 12px; }
        .info-label { font-weight: bold; color: #0056b3; display: inline-block; width: 80px; }
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
            <h2 style="color: #0056b3;">Novo Contato Recebido</h2>
        </center>
        
        <p><span class="info-label">Nome:</span> '.htmlspecialchars($nome, ENT_QUOTES, 'UTF-8').'</p>
        <p><span class="info-label">E-mail:</span> '.htmlspecialchars($email, ENT_QUOTES, 'UTF-8').'</p>
        <p><span class="info-label">Telefone:</span> '.($telefone ? htmlspecialchars($telefone, ENT_QUOTES, 'UTF-8') : 'Não informado').'</p>
        <p><span class="info-label">Assunto:</span> '.($assunto ? htmlspecialchars($assunto, ENT_QUOTES, 'UTF-8') : 'Consulta').'</p>
        
        <hr>
        
        <h3 style="color: #0056b3;">Mensagem:</h3>
        <div class="message-box">'.nl2br(htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8')).'</div>
        
        <hr>
        
        <p>Este contato foi enviado através do formulário do site em '.date('d/m/Y H:i').'.</p>
        <p>Score reCAPTCHA: '.$recaptcha_result['score'].'</p>
    </div>
    
    <div class="footer">
        <p>M3 Soluções e Serviços © '.date('Y').' - Todos os direitos reservados</p>
        <p>Rua Lopo Saraiva, 179 bloco 2 sala 320 - Rio de Janeiro/RJ</p>
    </div>
</body>
</html>';

        // Versão em texto puro (alternative body)
        $mail->AltBody = "NOVO CONTATO - M3 SOLUÇÕES\n\n".
                        "Nome: $nome\n".
                        "E-mail: $email\n".
                        "Telefone: ".($telefone ?: 'Não informado')."\n".
                        "Assunto: ".($assunto ?: 'Consulta')."\n\n".
                        "Mensagem:\n$mensagem\n\n".
                        "Enviado em: ".date('d/m/Y H:i')."\n".
                        "Score reCAPTCHA: ".$recaptcha_result['score']."\n\n".
                        "M3 Soluções e Serviços\n".
                        "Rua Lopo Saraiva, 179 bloco 2 sala 320 - Rio de Janeiro/RJ";

        $mail->send();
        echo json_encode([
            'success' => true, 
            'message' => 'Mensagem enviada com sucesso! Em breve entraremos em contato.',
            'type' => 'success'
        ], JSON_UNESCAPED_UNICODE);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode([
            'success' => false, 
            'message' => 'Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde ou entre em contato diretamente por telefone.',
            'type' => 'error'
        ], JSON_UNESCAPED_UNICODE);
        error_log('Erro no envio de e-mail: ' . $mail->ErrorInfo);
    }
} else {
    http_response_code(405);
    echo json_encode([
        'success' => false, 
        'message' => 'Método não permitido',
        'type' => 'error'
    ], JSON_UNESCAPED_UNICODE);
}
?>