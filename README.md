# Settings API - Laravel 12

This is a simple **Settings API** built with **Laravel 12**, using API Resources and authentication. It provides endpoints to retrieve application settings securely.

---

## Table of Contents
- [Installation](#installation)
- [Requirements](#requirements)
- [Setup](#setup)
- [API Endpoints](#api-endpoints)
- [Authentication](#authentication)
- [Response Format](#response-format)
- [License](#license)

---

## Installation

Clone this repository:

```bash
git clone https://github.com/your-username/settings-api.git
cd settings-api
Install dependencies:

composer install

Copy .env.example to .env:

cp .env.example .env

---

Generate application key:

php artisan key:generate
Requirements
PHP 8.1+
Laravel 12
MySQL / SQLite / PostgreSQL
Composer
Setup
Set up your database in .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
Run migrations:
php artisan migrate
Seed some settings (optional):
php artisan db:seed --class=SettingsSeeder
API Endpoints
Get All Settings
GET /api/settings
Headers:
Authorization: Bearer {token}
Response (200):
{
  "status": 200,
  "message": "Settings retrieved successfully",
  "data": [
    {
      "Name": "App Name",
      "Description": "Application description",
      "Version": "1.0.0"
    }
  ]
}
Response (401 - Unauthenticated):
{
  "status": 401,
  "message": "Unauthenticated"
}
Response (404 - No settings):
{
  "status": 404,
  "message": "Settings Not Found"
}
Authentication
The API is protected by Laravel authentication (e.g., sanctum or passport).
Only authenticated users can access settings.
Example of passing Bearer token:
Authorization: Bearer your_token_here
Response Format

All API responses follow this structure:

{
    "status": 200,
    "message": "Your message here",
    "data": [...]
}
status → HTTP status code
message → descriptive message
data → actual payload (array or object)
