<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About The Project
This project uses the PHP's Laravel powerful framework (with Breeze) to make a tool for managing shortened URLs.

With this tool you can create new URLs and view/edit/delete all of your URLs (upon registering and logging in/using its API).

## How to install it?
#### Prepare yourself:
- Make sure that you have [Composer](https://getcomposer.org/) installed and up-to-date by running `composer self-update`
- Make sure that you have [NodeJS](https://nodejs.org/en/download) installed and up-to-date by checking `node -v`
- Make sure that you have [npm](https://www.npmjs.com/package/npm) installed and up-to-date by running `npm i npm`
- Download the project's files


#### Run some commands:
- Install the dependencies:
```console
composer require
```
- Edit the `.env` file (located in the root directory) and make sure the database info is correct.
- Start your database server (e.g. MAMP)
- Create the database tables (You may append the `--seed` flag to fill the database with [some data](#good-to-know)):
```console
php artisan migrate

php artisan migrate --seed
```
- Make sure that all node libraries will work:
```console
npm run dev
```
- Start the web server (Run in another Terminal window):
```console
php artisan serve
```


##### You are good to go, just open the address that presented in the console and have the best experience of the tool!

## API
This tool includes, in additional to the web interface, a RESTful API.

You can find the full documentation at the [/docs](http://127.0.0.1:8000/docs) page.

## Good to know
- If you've seeded the database, you may use any account with the password "`password`".
