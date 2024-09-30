# Filament Scroll Navigator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hoceineel/filament-scroll-navigator.svg?style=flat-square)](https://packagist.org/packages/hoceineel/filament-scroll-navigator)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/hoceineel/filament-scroll-navigator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/hoceineel/filament-scroll-navigator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/hoceineel/filament-scroll-navigator/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/hoceineel/filament-scroll-navigator/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/hoceineel/filament-scroll-navigator.svg?style=flat-square)](https://packagist.org/packages/hoceineel/filament-scroll-navigator)

Filament Scroll Navigator is a sleek and efficient plugin for Filament admin panels that adds a dynamic scroll-to-top and scroll-to-bottom button. This enhances navigation on long pages, improving user experience and productivity.

## Features

- Smooth scrolling to top and bottom of the page
- Dynamic button that changes based on scroll position
- Seamless integration with Filament admin panels

## Installation

You can install the package via composer:

```bash
composer require hoceineel/filament-scroll-navigator
```

## Usage

Once installed, the Filament Scroll Navigator will automatically add the scroll button to all your Filament admin pages. No additional configuration is required for basic functionality.

## Customization

If you want to customize the appearance of the scroll button, you can publish the views:

```bash
php artisan vendor:publish --tag="filament-scroll-navigator-views"
```

After publishing, you can modify the button's appearance by editing the file:
`resources/views/vendor/filament-scroll-navigator/components/scroll-button.blade.php`

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

- [Hoceine EL Idrissi](https://github.com/hoceineel)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
```

This README:

1. Updates the package name and GitHub links to match your package.
2. Provides a brief description of the Filament Scroll Navigator.
3. Lists key features of the package.
4. Gives clear installation instructions.
5. Explains basic usage and how to customize the package.
6. Includes sections for testing, changelog, contributing, security, credits, and license.

You can further customize this README by:

- Adding screenshots or GIFs demonstrating the scroll navigator in action.
- Including more detailed usage examples if there are additional configuration options.
- Mentioning any specific requirements or compatibility notes.

