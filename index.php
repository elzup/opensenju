<?php

require_once('./config.php');

Model::factory('Simple')->find_many(); // SQL executed: SELECT * FROM `tests_simple`
Model::factory('SimpleUser')->find_many(); // SQL executed: SELECT * FROM `tests_simple_user`
