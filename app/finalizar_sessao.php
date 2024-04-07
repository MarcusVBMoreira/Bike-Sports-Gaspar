<?php

require('inc/config.php');
require('inc/api_functions.php');
require('inc/functions.php');

session_start();
session_destroy();

header('Location: index.php');