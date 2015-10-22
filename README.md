wiki
====
Laravel 5 Wiki Package

Package Status: In Development


### Installation ###

To install the package add the following line to your composer.json

<code>
"require": {
    "taskforcedev/wiki": "5.*"
}
</code>

After doing this you run composer update

<code>php artisan dump-autoload</code>

#### Service Provider ####

After this you should add the following service provider to your config/app.php

<code>Taskforcedev\Wiki\ServiceProvider::class,</code>

Also if not present please also add the following service provider.

<code>Taskforcedev\LaravelSupport\ServiceProvider::class,</code>

#### Overwriting Config ####
The package comes with default config however you will likely wish to publish this and overwrite with your own config settings.

<code>php artisan vendor:publish --tag="taskforce-wiki"</code>

## TODO
Add support for markdown editing.
Add HTML sanitization. (Propose using https://github.com/michelf/php-markdown).
