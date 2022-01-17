# A simple profile page for Filament.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangjchandler/filament-profile.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-profile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-profile/run-tests?label=tests)](https://github.com/ryangjchandler/filament-profile/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-profile/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ryangjchandler/filament-profile/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangjchandler/filament-profile.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-profile)

This package provides a very simple `Profile` page that allows the current user to manage their name, email address and password inside of Filament.

![Screenshot of Page](./art/screenshot.png)

## Installation

You can install the package via Composer:

```bash
composer require ryangjchandler/filament-profile
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-profile-views"
```

## Usage

This package will automatically register the `Profile` page as a Livewire component, but won't automatically add it to Filament. You should add the following line of code to your `AppServiceProvider::register()` method.

```php
Filament::registerPages([
    \RyanChandler\FilamentProfile\Pages\Profile::class
]);
```

If you visit your Filament panel now, you'll see a new `Account` navigation group as well as a `Profile` page.

## Customising the `Profile` page

Since the package **does not** automatically add the `Profile` page to your Filament panel, you are free to extend the page and customise it yourself.

You should first run the following command in your terminal:

```bash
php artisan filament:page Profile
```

This will create a new `App\Filament\Pages\Profile` class in your project.

You can then update this class to extend the `RyanChandler\FilamentProfile\Pages\Profile` class.

```php
namespace App\Filament\Pages;

use RyanChandler\FilamentProfile\Pages\Profile as BaseProfile;

class Profile extends BaseProfile
{
    // ...
}
```

Filament will automatically register your new `Profile` page and you're able to customise it to your liking. You can remove the navigation group, modify the form, etc.
## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ryan Chandler](https://github.com/ryangjchandler)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
