# Result Publisher

## Deploying to Railway or Render

### 1) Use the correct project root
The app root is the folder that contains `index.php`, `composer.json`, `config/database.php`, and `Procfile`.

> If your repository contains an outer `result_publisher` folder, make sure the deploy repo root is the inner `result_publisher` folder.

### 2) Environment variables
This app now uses environment variables for database access.

- `DB_HOST` - MySQL host
- `DB_PORT` - MySQL port (default `3306`)
- `DB_NAME` - `result_management`
- `DB_USER` - MySQL username
- `DB_PASS` - MySQL password

A sample file is included in `.env.example`.

### 3) GitHub repo setup
1. Initialize Git in the app root folder:
   ```bash
   git init
   git add .
   git commit -m "Initial deployment-ready PHP app"
   ```
2. Create a GitHub repository and push this folder as the repository root.
   - If your local folder contains an extra outer `result_publisher`, push the inner `result_publisher` folder.

### 4) Deploy on Railway
1. Push the project to GitHub.
2. Create a new Railway project and link the repository.
3. Set build command to:
   ```bash
   composer install
   ```
4. Railway will use `Procfile` to run:
   ```bash
   php -S 0.0.0.0:$PORT
   ```
5. Add a MySQL plugin in Railway.
6. Set the environment variables from the Railway MySQL plugin.
7. Import `database/result_management.sql` into the Railway MySQL database.

### 4) Deploy on Render
1. Push the project to GitHub.
2. Create a new Web Service on Render.
3. Set runtime to `PHP`.
4. Set build command to:
   ```bash
   composer install
   ```
5. Set start command to:
   ```bash
   php -S 0.0.0.0:$PORT
   ```
6. Add a MySQL database on Render or use an external MySQL provider.
7. Set the same environment variables in Render.
8. Import `database/result_management.sql` into the database.

### 5) Default admin user
The SQL file creates a default admin:
- username: `admin`
- password: `admin123`
