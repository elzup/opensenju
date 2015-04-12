<?php

require_once(dirname(__FILE__) . '/../vendor/autoload.php');
require_once(dirname(__FILE__) . '/../models/objects.php');

define('ENVIRONMENT_DEV', 0);
define('ENVIRONMENT_PRO', 1);

if (file_exists('./env')) {
    define('ENVIRONMENT', ENVIRONMENT_PRO);
} else {
    define('ENVIRONMENT', ENVIRONMENT_DEV);
}

if (ENVIRONMENT == ENVIRONMENT_DEV) {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
    ORM::configure('mysql:host=localhost;dbname=****');
    ORM::configure('username', '****');
    ORM::configure('password', '****');
    ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} else {
    ORM::configure('mysql:host=localhost;dbname=****');
    ORM::configure('username', '****');
    ORM::configure('password', '****');
    ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}

ORM::configure('logging', true);
