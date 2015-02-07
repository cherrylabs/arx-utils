# Arx Utilities PHP Class

[![Latest Stable Version](https://poser.pugx.org/arx/utils/v/stable.png)](https://packagist.org/packages/arx/utils)
[![Total Downloads](https://poser.pugx.org/arx/utils/downloads.png)](https://packagist.org/packages/arx/utils)
[![License](https://poser.pugx.org/arx/utils/license.png)](http://opensource.org/licenses/MIT)


## Features

* some usefull php class and methods to use in any kind of php projects

## Getting started

### Requirements

- PHP > 5.3
- [Composer](http://www.getcomposer.org)

### Installation

In the `require` key of `composer.json` file add the following

```json
"arx/utils": "dev-master"
```

```bash
$ composer update
```

```php
    require 'vendor/autoload.php'
```

### How to use it

```php
    require 'vendor/autoload.php';
    
    use Arx\Utils\Utils;
    
    # Debug method 
    
    Utils::pre(['test']);
    
    # Debug with die
    
    Utils::predie('test');
    
    # Make an alias helper
    
    Utils::alias('dd', 'Utils::predie');
    
    # Manipulate an array
    
    ## Merge recursively
    Arx\Utils\Arr::merge(['test' => ['foo1']], ['test' => ['foo2']]);
    
    # Manipulate an image
    ## Resize an image to best fix max width, max height
    Arx\Utils\Image::load('$$path$$')->best_fit(400, 400)->save($$dest_path$$);
    
    ## Resize an image to best fix max width, max height and output Base64 string
    Arx\Utils\Image::load('$$path$$')->fit_to_width(400)->outputBase64(); # output as base64 to load directly from img src
```

## Release Notes

### Version 4.2.0

- use Laravel tagging version to simplify the version correspondance (so yes we jump directly to 4.2 instead of 1.0)

## License

Blok Db is free software distributed under the terms of the MIT license

## Aditional information

Any questions, feel free to contact me or ask [here](https://github.com/arx/utils/issues)

Any issues, please [report here](https://github.com/arx/utils/issues)