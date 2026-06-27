# Sistema M3 - Laravel 13

Sistema profissional desenvolvido com Laravel 13, PHP 8.5, MariaDB, AdminLTE 4 e Bootstrap 5.3, compatível com Windows 11, WHM/cPanel, LiteSpeed e Apache.

## Requisitos

- PHP 8.5+
- MariaDB/MySQL
- Composer 2.x
- Node.js 20+ (para compilação de assets)

## Recursos Implementados

### Back-end
- Arquitetura modular (app/Modules)
- Repository Pattern + Service Layer + Policies + Form Requests
- RBAC (Spatie Laravel Permission)
- API REST com Laravel Sanctum
- Filas e Jobs
- Tarefas Agendadas (Scheduler)
- Backups automáticos (Spatie Laravel Backup)
- Cache Redis/Memcached
- Biblioteca de mídia (Spatie Media Library)
- SEO completo (Slugs, Sitemap, Robots.txt, JSON-LD, OpenGraph, Twitter Cards)
- Segurança contra XSS, CSRF e SQL Injection
- Testes (PHPUnit)

### Front-end
- Blade + Bootstrap 5.3
- AdminLTE 4 com tema Dark/Light
- CRUDs 100% AJAX
- Axios para requisições
- SweetAlert2 para alertas
- Toastr para notificações
- DataTables com Server Side
- Dropzone para upload (preview, drag-and-drop, WebP/AVIF)
- Summernote para edição HTML

## Instalação

1. Clone o repositório:
```bash
git clone git@github.com:seu-usuario/m3-sistema.git
cd m3-sistema/laravel-system
```

2. Instale as dependências PHP:
```bash
composer install
```

3. Copie o arquivo `.env.example` para `.env` e configure as credenciais do banco de dados:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure o banco de dados em `.env`:
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=m3_sistema
DB_USERNAME=root
DB_PASSWORD=
```

5. Execute as migrações e seeds:
```bash
php artisan migrate --seed
```

6. Instale as dependências front-end:
```bash
npm install
npm run build
```

7. Inicie o servidor:
```bash
php artisan serve
```

## Estrutura do Projeto

```
laravel-system/
├── app/
│   ├── Console/Kernel.php
│   ├── Exceptions/Handler.php
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   ├── Requests/
│   │   └── Kernel.php
│   ├── Models/
│   ├── Modules/
│   │   └── User/
│   ├── Providers/
│   │   ├── AppServiceProvider.php
│   │   ├── AuthServiceProvider.php
│   │   ├── EventServiceProvider.php
│   │   └── RouteServiceProvider.php
│   └── Repositories/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
│   ├── api.php
│   ├── console.php
│   └── web.php
└── tests/
```

## Testes

```bash
php artisan test
```

## Deploy em Produção

Para deploy em ambiente de produção (WHM/cPanel/LiteSpeed/Apache), siga estas etapas:

1. Copie todos os arquivos (exceto `node_modules/` e `.git/`) para o servidor
2. Configure o `.env` com as credenciais de produção
3. Execute as migrações: `php artisan migrate --force`
4. Limpe o cache: `php artisan cache:clear && php artisan config:clear && php artisan route:clear && php artisan view:clear`
5. Configure o cron job para o scheduler: `* * * * * php /caminho/para/seu/projeto/artisan schedule:run >> /dev/null 2>&1`

## Licença

Este sistema é desenvolvido para uso interno.
