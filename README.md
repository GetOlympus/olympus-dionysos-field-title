<img src="https://github.com/GetOlympus/olympus-dionysos-field-title/blob/master/assets/field-title.png" align="left" />

# Dionysos Title Field

[![Olympus Component][olympus-image]][olympus-url]
[![CodeFactor Grade][codefactor-image]][codefactor-url]
[![Packagist Version][packagist-image]][packagist-url]
[![MIT][license-image]][license-blob]

> This component is a part of the **Olympus Dionysos fields** for **WordPress**.

```sh
composer require getolympus/olympus-dionysos-field-title
```

---

## Table of contents

[Field initialization](#field-initialization) • [Variables definition](#variables-definition) • [Title display](#title-display) • [Release history](#release-history) • [Contributing](#contributing)

---

## Field initialization

Use the following lines to add a `title field` in your **WordPress** admin pages or custom post type's meta fields:  
_Note the `$identifier` (first `::build()` parameter) is set to `false` because no value is stored in database._

```php
return \GetOlympus\Dionysos\Field\Title::build(false, [
    'title' => 'The Dark Knight',
    'class' => 'robin',
    'level' => 2,
]);
```

## Variables definition

| Variable | Type    | Default value if not set | Accepted values |
| ---------| ------- | ------------------------ | --------------- |
| `title`  | String  | `'Title'` | *empty* |
| `class`  | String  | *empty*   | *empty* |
| `level`  | Integer | 2         | 1 to 6 |

## Title display

The component will display:

```twig
<h{{ level }} class="zeus-title {{ class }}">{{ title|raw }}</h{{ level }}>
```

## Release History

| Version | Note |
| :------ | :--- |
| 0.0.2  | Clean documentation |
| 0.0.1  | Initial commit |

## Contributing

1. Fork it (<https://github.com/GetOlympus/olympus-dionysos-field-title/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

---

**Built with ♥ by [Achraf Chouk](https://github.com/crewstyle "Achraf Chouk") ~ (c) since a long time.**

<!-- links & imgs dfn's -->
[olympus-image]: https://img.shields.io/badge/for-Olympus-44cc11.svg?style=flat-square
[olympus-url]: https://github.com/GetOlympus
[codefactor-image]: https://www.codefactor.io/repository/github/GetOlympus/olympus-dionysos-field-title/badge?style=flat-square
[codefactor-url]: https://www.codefactor.io/repository/github/getolympus/olympus-dionysos-field-title
[license-blob]: https://github.com/GetOlympus/olympus-dionysos-field-title/blob/master/LICENSE
[license-image]: https://img.shields.io/badge/license-MIT_License-blue.svg?style=flat-square
[packagist-image]: https://img.shields.io/packagist/v/getolympus/olympus-dionysos-field-title.svg?style=flat-square
[packagist-url]: https://packagist.org/packages/getolympus/olympus-dionysos-field-title