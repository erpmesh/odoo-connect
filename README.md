# odoo-connect

[![Build Status](https://travis-ci.org/erpmesh/odoo-connect.svg)](https://travis-ci.org/erpmesh/odoo-connect)
[![Total Downloads](https://poser.pugx.org/erpmesh/odoo-connect/d/total.svg)](https://packagist.org/packages/erpmesh/odoo-connect)
[![Latest Stable Version](https://poser.pugx.org/erpmesh/odoo-connect/v/stable.svg)](https://packagist.org/packages/erpmesh/odoo-connect)
[![Latest Unstable Version](https://poser.pugx.org/erpmesh/odoo-connect/v/unstable.svg)](https://packagist.org/packages/erpmesh/odoo-connect)
[![License](https://poser.pugx.org/erpmesh/odoo-connect/license.svg)](https://packagist.org/packages/erpmesh/odoo-connect)


Standalone service that integrate Odoo with ERPMesh

## Installation

Install the latest version with

```bash
$ composer require erpmesh/odoo-connect
```

## Basic Usage

```php
<?php

use erpmesh\odoo\OdooHandler;

$_ENV['ODOO_URL'] = 'http://demo.odoo.com';
$_ENV['ODOO_DB_NAME'] = 'demo';
$_ENV['ODOO_DB_USER'] = 'admin';
$_ENV['ODOO_DB_PASSWORD'] = 'admin';


// call the handler to process data
$handler = new OdooHandler();
$handler->handleRequest();
```

## Documentation

Please see the documents here [erpMesh](http://erpmesh.com/docs)

## About

### Requirements

- erpMesh odoo-connect works with PHP 5.5 or above, and is also tested to work with HHVM.

### Submitting bugs and feature requests

Bugs and feature request are tracked on [GitHub](https://github.com/erpmesh/odoo-connect/issues)

### Author

Pitipong Guntawong - <pppstudio.gm@gmail.com> - <https://fb.com/pppstudio><br />

### License

The ErpMesh odoo-connect is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)