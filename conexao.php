<?php
/* define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('PORT', '3312');
define('DBNAME', 'agroven');

$conectar = new PDO('mysql:host=' . ';port=' . PORT.  HOST . ';dbname=' . DBNAME . ';', USER, PASS);   */

define('USER', 'rayray');
define('PASS', '5668');
define('DBNAME', 'agroven');

$conectar = new PDO('mysql:dbname=' . DBNAME . ';', USER, PASS);