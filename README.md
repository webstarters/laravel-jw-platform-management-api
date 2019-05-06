# Laravel JW Platform Management API

A super-simple wrapper for the JW Platform Management API.

## Installation

You can install the package via Composer:

```bash
composer require webstarters/laravel-jw-platform-management-api
```

## Usage

File uploading has not been tested and may not work. PRs are accepted to include this functionality.

```php
$management = new \Webstarters\Platform\Management();
echo $management->get('/videos/tracks/list');
```

## Changelog

See [CHANGELOG](CHANGELOG.md) for details on what has changed.

## Security

For any security related issues, send a mail to [pj@webstarters.dk](mailto:pj@webstarters.dk) instead of using the issue tracker.

## Credits

- [Peter Jørgensen](https://github.com/peterchrjoergensen)
- [All Contributors](../../contributors)

## About

We are a Digital agency focusing on efficient sparring, efficient process and efficient digital solutions. Just that, pure and precise effect.

When we say Webstarters, that's exactly what we are. And what we do.

Learn more at [Webstarters.dk digital marketing bureau](https://webstarters.dk).

## License

[MIT License](LICENSE)
