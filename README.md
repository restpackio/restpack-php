# reastpack-php

Official PHP client for Restpack APIs

## Installation

Requires PHP 5.6.

The recommended way to install restpack-php is through [Composer](https://getcomposer.org):

First, install Composer:

```
$ curl -sS https://getcomposer.org/installer | php
```

Next, install the latest restpack-php:

```
$ php composer.phar require restpackio/restpack-php
```

Finally, you need to require the library in your PHP application:

```php
require "vendor/autoload.php";
```

## Screenshot API

```php
$screenshot = new Restpack\Screenshot("<YOUR ACCESS TOKEN>");

// Capture given URL. Return the document details and CDN url of the Image
$screenshot.capture("http://google.com", [ format => "png" /* , other options */ ])

// Capture given html content. Return the document details and CDN url of the Image
$screenshot.captureHTML("<p><b>Bold text</b> etc</p>", [ format => "png" /* , other options */ ])

// Capture given URL. Return the image file as Buffer
$screenshot.captureToImage("http://google.com", [ format => "png" /* , other options */ ])

// Capture given html content. Return the image file as Buffer
$screenshot.captureHTMLToImage("<p><b>Bold text</b> etc</p>", [ format => "png" /* , other options */ ])
```

## HTML To PDF API

```php
$htmlpdf = new Restpack\HTMLToPDF("<YOUR ACCESS TOKEN>");

// Convert given URL to PDF. Return the document details and CDN url of PDF
$htmlpdf.convert("http://google.com", [ pdf_page => "A4" /* , other options */ ])

// Convert given html content to PDF. Return the document details and CDN url of PDF
$htmlpdf.convertHTML("<p><b>Bold text</b> etc</p>", [ pdf_page => "A4" /* , other options */ ])

// Convert given URL to PDF. Return the PDF document as Buffer
$htmlpdf.convertToImage("http://google.com", [ pdf_page => "A4" /* , other options */ ])

// Convert given html content to PDF. Return the PDF document as Buffer
$htmlpdf.convertHTMLToImage("<p><b>Bold text</b> etc</p>", [ pdf_page => "A4" /* , other options */ ])
```
