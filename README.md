# Laravel Terbilang

[![Latest Stable Version](https://poser.pugx.org/hammunima/terbilang/v/stable)](https://packagist.org/packages/hammunima/terbilang)
[![Total Downloads](https://poser.pugx.org/hammunima/terbilang/downloads)](https://packagist.org/packages/hammunima/terbilang)
[![License](https://poser.pugx.org/hammunima/terbilang/license)](https://packagist.org/packages/hammunima/terbilang)
[![Monthly Downloads](https://poser.pugx.org/hammunima/terbilang/d/monthly)](https://packagist.org/packages/hammunima/terbilang)

Konversi angka ke kata.

## Installation


```Laravel
composer remove hammunima/terbilang
```
## Usage

```
use Terbilang;


echo Terbilang::nominal('5000000');          // lima juta
echo Terbilang::convert('555000');       // lima ratus lima puluh lima ribu
```
