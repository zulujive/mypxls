<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## PHP myPxls Admin
This project is currently in early development and will be the next generation admin panel for Pxls.space instances and will be configured to work with Rust instances as well.

## Goals
- Making a proper API solution for Pxls.space instances
- Easy migration from Pxls.space to Pxls Rust
- User management through admin panel (unavailable on Pxls Admin)
- Integrating administration of the new PxlsFiddle
- Creating a way to contact users on the site
- Allowing for head admins to edit configuration settings (cooldown, palette, etc.)
- Adding a staff chat within the admin panel for mods to communicate
- Adding various webhooks for Discord (staff chats, admin actions, etc.)
- Adding a built-in ban appeal form for Pxls Rust
- Not letting this project sit for years and being completely untouched (cough cough *Pxls Admin*)

## Intructions
This is NOT intended for production yet. Please use PxlsAdmin for production until this project has its first release.

### Requirements
- PHP 8.2 or above
- PHP Composer
- The following PHP extensions:
    - PHP XML
    - PHP cURL
    - PHP mySQL
- Node.js (optional, but recommended)

### Setting Up the Server
1. In the folder of your choice, clone the repository from GitHub
2. Open the folder "myPxls" and use the command:
```
composer install
```
3. Duplicate the ".env.example" file as ".env"
4. Edit the settings within the .env file to work with your instance
5. Use the command:
```
php artisan key:generate
```
6. Start the server at port 8000 with:
```
php artisan serve
```

## Roadmap
This project is still in its infancy and it's hard to even know exactly what will and won't be implemented in this first release. The main focus will be getting the Pxls database connected and ready as this is vital to creating a proper backend. Once the database has been properly configured, a system of authentication using session tokens from Pxls will be implemented. From there, a simple UI will be developed that gives the barebones functionality to the admin panel. As the project progresses, many API endpoints will be developed so as to allow for an increasingly diverse set of integrations.
