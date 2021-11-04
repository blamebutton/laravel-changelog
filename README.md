# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/blamebutton/laravel-changelog.svg?style=flat-square)](https://packagist.org/packages/blamebutton/laravel-changelog)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/blamebutton/laravel-changelog/phpunit?label=tests)](https://github.com/blamebutton/laravel-changelog/actions?query=workflow%3Aphpunit+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/blamebutton/laravel-changelog/php-cs-fixer?label=code%20style)](https://github.com/blamebutton/laravel-changelog/actions?query=workflow%3Aphp-cs-fixer+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/blamebutton/laravel-changelog.svg?style=flat-square)](https://packagist.org/packages/blamebutton/laravel-changelog)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require blamebutton/laravel-changelog
```

## Usage

```php
use BlameButton\Laravel\Changelog\ChangelogFacade;

/** 
 * Get the raw content of your changelog file. 
 */
ChangelogFacade::raw();
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email bram@ceulemans.dev instead of using the issue tracker.

## Credits

-   [Bram Ceulemans](https://github.com/blamebutton)
-   [All Contributors](../../contributors)

## License

The Mozilla Public License 2.0. Please see [License File](LICENSE.md) for more information.
