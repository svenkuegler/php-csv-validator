PHP CSV Validator
===
[![Build Status](https://travis-ci.org/svenkuegler/php-csv-validator.svg)](https://travis-ci.org/svenkuegler/php-csv-validator) 
[![Code Climate](https://codeclimate.com/github/svenkuegler/php-csv-validator/badges/gpa.svg)](https://codeclimate.com/github/svenkuegler/php-csv-validator) 
[![Test Coverage](https://codeclimate.com/github/svenkuegler/php-csv-validator/badges/coverage.svg)](https://codeclimate.com/github/svenkuegler/php-csv-validator/coverage) 

Simple PHP Class to Validate CSV Files

## Installation

via Composer:
```bash
composer require svenkuegler/php-csv-validator
```

## Usage

### Quick Start
Simple example to validate a file against a Schema. 

```php
require 'vendor/autoload.php';

$validator = new PhpCsvValidator();
$validator->loadSchemeFromFile("tests/files/example-scheme2.json");

if($validator->isValidFile("tests/files/example.csv")) {
    echo "File is Valid";
} else {
    echo "File is Invalid!";
}
```

### Schema
...

### Exception handling
...

## Running Tests
```bash
$ phpunit
```

## Contributing
Feel free to send pull requests or create issues if you come across problems or have great ideas. Any input is appreciated!

## License
This code is published under the [The MIT License](https://github.com/svenkuegler/php-csv-validator/blob/HEAD/LICENSE). This means you can do almost anything with it, as long as the copyright notice and the accompanying license file is left intact.