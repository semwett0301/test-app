# Test Task: Laravel Banks & Comments

This repository contains a small Laravel application used as a test task for a PHP job application. It demonstrates a simple CRUD domain around Banks and their Comments, plus basic user authentication.

## Stack
- **Backend**: PHP 8+, Laravel
- **Auth**: Laravel authentication scaffold (`Auth::routes()`)
- **Database**: MySQL or SQLite (via Laravel Eloquent)
- **Build tooling**: Vite, NPM

## Features
- **Banks**
  - List all banks
  - Create a bank (form + POST)
- **Comments**
  - List comments for a specific bank
  - Add a new comment for a bank
- **Authentication**
  - Register, login, password reset, email verification views/controllers

## App Functionality Overview
The UI consists of a landing page with a list of banks and a page to view and add comments for a specific bank. Auth scaffolding provides login/register and related flows. Styling and small interactivity are handled via assets under `resources/` and built with Vite.

Key routes (from `routes/web.php`):
- `GET /` → `HomeController@index`
- `GET /banks` → `Bank\IndexController` (list)
- `POST /banks` → `Bank\StoreController` (create)
- `GET /banks/{bank}/comments` → `Comment\IndexController` (list by bank)
- `POST /banks/{bank}/comments` → `Comment\StoreController` (create for bank)
- `Auth::routes()` → login, register, password/email verification

API (from `routes/api.php`):
- `GET /api/user` (auth:sanctum) → returns the current authenticated user
 Laravel app, `Bank` model with basic controllers, migrations for banks and core tables, Vite config, and scaffolding

## Getting Started
1) Requirements
- PHP 8.0+
- Composer
- Node.js (v16+) and NPM
- A database (MySQL/PostgreSQL/SQLite). SQLite works out-of-the-box for quick start

2) Install dependencies
```bash
composer install
npm install
```

3) Environment
```bash
cp .env.example .env
php artisan key:generate
# Update DB settings in .env (or use SQLite: DB_CONNECTION=sqlite)
```

4) Migrate and seed
```bash
php artisan migrate --seed
```

5) Run dev servers
```bash
php artisan serve
npm run dev
```
Visit `http://127.0.0.1:8000`.

Build production assets:
```bash
npm run build
```

## Project Structure Highlights
- `app/Http/Controllers/Bank/*` and `app/Http/Controllers/Comment/*`: Request handlers
- `app/Http/Requests/*`: Validation
- `app/Http/Resources/*`: API resources
- `app/Services/*`: Domain logic for banks/comments
- `app/Models/*`: Eloquent models (`Bank`, `Comment`, `User`)
- `database/migrations/*`: Schema for users, banks, comments, etc.
- `resources/views/*`: Blade templates for bank listing, comments, auth
- `resources/js` and `resources/css|sass`: Front-end assets




