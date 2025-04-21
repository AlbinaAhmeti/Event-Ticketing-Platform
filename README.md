# Event Ticketing API - Setup Instructions
This is an API built with Laravel for an Event Ticketing Platform. The API allows user registration, login, event, venue and ticket management, and booking tickets for events.

1. Project Setup Steps
Follow these steps to set up the project:

Install project dependencies:

bash
Copy
Edit
composer install
Copy the .env.example file and rename it to .env.

Run migrations and seed the database:

bash
Copy
Edit
php artisan migrate:fresh --seed
Generate the application key:

bash
Copy
Edit
php artisan key:generate
Create a symbolic link for storage:

bash
Copy
Edit
php artisan storage:link
Start the local development server:

bash
Copy
Edit
php artisan serve

Update composer dependencies:

bash
Copy
Edit
composer update

2. Testing with Postman
You can use Postman to test the following API endpoints:
POST /api/register: Register a new user (send 'name', 'email', and 'password').
POST /api/login: Login with credentials (send 'email' and 'password').
GET /api/profile: Get the authenticated user's profile (requires authentication with Bearer token).
PUT /api/profile: Update the authenticated user's profile (requires authentication with Bearer token).

License: MITLicense: WITH

About Laravel
Laravel is a PHP web application framework with expressive, elegant syntax. It aims to make development enjoyable and easy by easing common tasks such as routing, dependency injection, ORM, schema migrations, background job processing, and real-time event broadcasting.

Learning Laravel
Laravel has an extensive documentation and tutorial library, with over 1500 video tutorials on Laracasts, covering Laravel, PHP, unit testing, and JavaScript.

Laravel Sponsors
We thank our sponsors for funding Laravel development:

Premium Partners:

Vehikl

Tighten Co.

Kirschbaum Development Group

And others...

Contributing
We welcome contributions to the Laravel framework. Please refer to the contribution guide in the Laravel documentation.

Code of Conduct
Please review and abide by the Laravel Code of Conduct.

Security Vulnerabilities
If you discover a security vulnerability, please send an email to Taylor Otwell via taylor@laravel.com. All security vulnerabilities will be addressed promptly.

License
Laravel is open-sourced software licensed under the MIT license.
