<?php

include_once('./config/config.php');

$stores = Model::factory('Store')->find_many();
include('./views/top.php');
