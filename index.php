<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('userCollection', 'DefaultController');
Router::get('joinChallenge', 'DefaultController');
Router::get('dashboard', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('signup', 'SecurityController');
Router::post('addEntry', 'EntryController');

Router::run($path);