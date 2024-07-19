# Anime Stream Application

## Introduction

Anime Stream Application. This platform is designed for anime lovers to immerse themselves in a rich collection of shows and episodes. With a user-friendly interface, viewers can easily navigate through various genres and discover new favorites.

## Features

* **User-Friendly Interface**: Users can easily browse through an extensive library of anime shows and episodes, complete with detailed descriptions and genres.

* **Comment System**: Engage with the community by leaving comments on episodes and sharing your thoughts with other viewers.

* **Admin Dashboard**: Administrators have the capability to manage content seamlessly, including creating and deleting episodes, shows, and genres, as well as managing user accounts.

* **User Management**: A simple registration and login system allows users to create accounts, enabling personalized experiences and interactions.

## Installation

1. **Clone the repository**:
      ```
      git clone https://github.com/yaman-shahbander-dev/anime-stream-app.git
      ```

2. **Navigate to the project directory**:
      ```
      cd anime-stream-app
      ```

3. **Install dependencies**:
      ```
      composer install
      ```

4. **Create a new .env file and configure the environment variables**:
      ```
      cp .env.example .env
      ```
      Open the .env file and update the following settings:
      
      * **DB_CONNECTION**: Set the database connection type (e.g., mysql, postgresql, sqlite).
      * **DB_HOST**, **DB_PORT**, **DB_DATABASE**, **DB_USERNAME**, **DB_PASSWORD**: Set the database connection details.

5. **Generate an application key**:
      ```
      php artisan key:generate
      ```

6. **Run the database migrations**:
      ```
      php artisan migrate
      ```

7. **Seed the database (optional)**:
      ```
      php artisan db:seed
      ```

8. **Start the development server**:
      ```
      php artisan serve
      ```

9. **Access the application**:

      Open your web browser and navigate to http://localhost/
