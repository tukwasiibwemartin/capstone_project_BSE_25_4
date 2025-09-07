# Innovation-Capstone-Project.
An assignment for Implementing a CI/CD Pipeline for a Web Application.

# Application Overview
This is an example app created for the blog post 

# Prerequisites
Check and confirm that you have the following tools installed
- PHP
- Composer
- Node & npm
- PostgreSQL


# Setup steps on local machine

1. Clone the repository
```
git clone https://github.com/tukwasiibwemartin/capstone_project_BSE_25_4.git
```

2. Navigate to the project repository
```
cd capstone_project_BSE_25_4
```

3. Install dependencies in the composer.json file
```
composer install
```

4. Install packages in the package.json file
```
npm install
```

5. Create a .env file using the .env_example. 

```
cp .env.example .env
```

6. Update the database configurations in the .env file i.e. database name, username and password to match your local settings
```
DB_DATABASE=yourdbname
DB_USERNAME=yourusername
DB_PASSWORD=yourpasssword
```

7. Run the command below to set the APP_KEY value in the .env file

```
php artisan key:generate
```

8. Run the command below to run the database migrations
```
php artisan migrate
```

9. Run the command below to start the php server
```
php artisan serve
```

10. Start the node server by running the command below
```
npm run dev
```


