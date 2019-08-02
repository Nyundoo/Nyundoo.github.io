<?php

ob_start();

session_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("phppage") ? null : define("phppage",__DIR__ . DS . "phppage");




?>