# check-partita-iva
[![Packagist](https://img.shields.io/badge/packagist-0.1.1-lightgrey.svg)](https://packagist.org/packages/sorciulus/check-partita-iva) [![Build Status](https://scrutinizer-ci.com/g/sorciulus/check-partita-iva/badges/build.png?b=master)](https://scrutinizer-ci.com/g/sorciulus/check-partita-iva/build-status/master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sorciulus/check-partita-iva/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sorciulus/check-partita-iva/?branch=master) [![Code Climate](https://codeclimate.com/github/sorciulus/check-partita-iva/badges/gpa.svg)](https://codeclimate.com/github/sorciulus/check-partita-iva) [![Issue Count](https://codeclimate.com/github/sorciulus/check-partita-iva/badges/issue_count.svg)](https://codeclimate.com/github/sorciulus/check-partita-iva) [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

Libraries for the formal control of the Italian VAT ID

## Installation

Via [Composer](http://getcomposer.org/):

```
composer require sorciulus/check-partita-iva
```
## Usage

```php
<?php
require_once 'vendor/autoload.php';

use sorciulus\PartitaIva\PartitaIva;

$check = new PartitaIva();
$result = $check->setPartitaIva("07973780013")->isValid();
if ($result) {
    echo "Partita Iva is formally valid";
} else {
    echo "Partita Iva not valid";
}   

```
License
----
This Library is released under the MIT License. Please see License File for more information.
