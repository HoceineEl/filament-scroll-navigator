# Filament Scroll Navigator


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
`resources/views/vendor/filament-scroll-navigator/components/scroller.blade.php`

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


