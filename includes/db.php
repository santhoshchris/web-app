<?php

// Opens a connection to the MySQL database
// Shared between all the PHP files in our application

// Our username and password are kept in Environment Varialbes, in .htaccess
// This is for security, so they are never publicly visible on GitHub
$user = getenv('MYSQL_USERNAME'); // The MySQL username
$pass = getenv('MYSQL_PASSWORD'); // The MySQL password
$host = getenv('MYSQL_DB_HOST');
$name = getenv('MYSQL_DB_NAME');

$data_source = sprintf('mysql:host=%s;dbname=%s', $host, $name);

// PDO: PHP Data Objects
// Allows us to connect to many different kinds of databases
$db = new PDO($data_source, $user, $pass);

// Force the connection to communicate in UTF-8
// and support many human languages
$db->exec('SET NAMES utf8');

