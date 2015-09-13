<?php

require __DIR__ . '/bootstrap/autoload.php';

//Config
$url = $_ENV['ODOO_URL'];
$db = $_ENV['ODOO_DB_NAME'];
$username = $_ENV['ODOO_DB_USER'] ? $_ENV['ODOO_DB_USER'] : 'admin';
$password = $_ENV['ODOO_DB_PASSWORD'] ? $_ENV['ODOO_DB_PASSWORD'] : 'admin';

// call the handler to process data
$handler = new OdooHandler($url, $db, $username, $password);
$handler->handleRequest();