# Event Ticketing API - Setup Instructions
This is an API built with Laravel for an Event Ticketing Platform. The API allows user registration, login, event, venue and ticket management, and booking tickets for events.
1. Installation Instructions
Follow the steps below to set up and run this project on your local machine:
1. Clone the repository:
git clone https://github.com/username/your-repo-name.git
cd your-repo-name
2. Install dependencies:
composer install
3. Copy the .env.example file to create a new .env file:
cp .env.example .env
4. Generate the application key:
php artisan key:generate
5. Configure your database in the .env file. Example for MySQL:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=event_ticketing
DB_USERNAME=root
DB_PASSWORD=
6. Run migrations and seed the database:
php artisan migrate --seed
7. Start the server:
php artisan serve
This will start the application on http://localhost:8000.

2. Testing with Postman
You can use Postman to test the following API endpoints:
POST /api/register: Register a new user (send 'name', 'email', and 'password').
POST /api/login: Login with credentials (send 'email' and 'password').
GET /api/profile: Get the authenticated user's profile (requires authentication with Bearer token).
PUT /api/profile: Update the authenticated user's profile (requires authentication with Bearer token).

