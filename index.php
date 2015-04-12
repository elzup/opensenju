<?php

require_once('./config.php');

$stores = Model::factory('Store')->find_many();

