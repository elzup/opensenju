<?php

require_once('./config.php');

$stores = Model::factory('Store')->find_many();
$schedules = Model::factory('Schedule')->find_many();

