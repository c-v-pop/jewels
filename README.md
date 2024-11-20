Jewels Project Documentation
About Jewels
Jewels is a website developed for a client specializing in selling used jewelry. The site is currently in its prototype phase and undergoing ongoing development. It provides essential CRUD (Create, Read, Update, Delete) functionality for managing jewelry products in the online store.

Features
CRUD Operations: Users can create, view, update, and delete jewelry products.
Dynamic Styling with Tailwind CSS: For seamless, responsive, and visually appealing UI design.
Under Development: The project is currently a prototype and will have additional features and improvements added.
Technologies Used
Laravel: Backend framework for building robust and scalable web applications.
Herd: For local development, ensuring consistency across different environments.
Tailwind CSS: CSS framework for utility-first styling and responsive design.
Prerequisites
Ensure the following are installed on your machine:

PHP (>= 8.0) - Required for running Laravel.
Composer - PHP dependency manager.
Node.js and npm - Needed to compile assets with Tailwind CSS.
Herd - For a consistent development environment.
SQLite (or alternative database) - Jewels is configured to use SQLite by default.
Installation and Setup
Follow these steps to run the project locally:

Clone the Repository

bash
Copy code
git clone <repository-url>
cd jewels
Install Composer Dependencies

Run the following command in your terminal:

bash
Copy code
composer install
Install NPM Dependencies

Install Node dependencies to use Tailwind CSS and other front-end tooling:

bash
Copy code
npm install
Environment Configuration

Duplicate .env.example and rename it to .env.
Update the .env file if necessary (e.g., database configurations if not using SQLite).
Generate Application Key

Laravel requires an application key. Run the following command to generate one:

bash
Copy code
php artisan key:generate
Run Migrations

To set up the database structure, run the migrations:

bash
Copy code
php artisan migrate
Compile Assets

To generate the CSS, including Tailwind styles, use:

bash
Copy code
npm run dev
Start the Development Server

To run the application locally, use Herd to start the server:

bash
Copy code
herd serve
Open your browser and navigate to the local URL provided by Herd (typically http://localhost).

Integrated PayPal payment option with redirect to seller page.