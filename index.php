<?php

require_once('./config.php');

var_dump(Model::factory('Stores')->find_many()); // SQL executed: SELECT * FROM `tests_simple`
var_dump(Model::factory('Schedule')->find_many()); // SQL executed: SELECT * FROM `tests_simple_user`
