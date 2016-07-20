This is a Laravel 5 package that provides team management facility for lavalite framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `lavalite/team`.

    "lavalite/team": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

```php
Litecms\Team\Providers\TeamServiceProvider::class,

```

And also add it to alias

```php
'Team'  => Litecms\Team\Facades\Team::class,
```

Use the below commands for publishing

Migration and seeds

    php artisan vendor:publish --provider="Litecms\Team\Providers\TeamServiceProvider" --tag="migrations"
    php artisan vendor:publish --provider="Litecms\Team\Providers\TeamServiceProvider" --tag="seeds"

Configuration

    php artisan vendor:publish --provider="Litecms\Team\Providers\TeamServiceProvider" --tag="config"

Language

    php artisan vendor:publish --provider="Litecms\Team\Providers\TeamServiceProvider" --tag="lang"

Views public and admin

    php artisan vendor:publish --provider="Litecms\Team\Providers\TeamServiceProvider" --tag="view-public"
    php artisan vendor:publish --provider="Litecms\Team\Providers\TeamServiceProvider" --tag="view-admin"

Publish admin views only if it is necessary.

## Usage


