<?php

#Local Database
/*$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach($db as $key => $value){
define(strtoupper ($key), $value);
}

$connection =
mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);*/


#Live web Database

$db['db_host'] = getenv("DB_HOST");
$db['db_user'] = getenv("DB_USER");
$db['db_pass'] = getenv("DB_PASS");
$db['db_name'] = getenv("DB_NAME");
$db['db_port'] = getenv("DB_PORT");

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(
    DB_HOST,
    DB_USER,
    DB_PASS,
    DB_NAME,
    DB_PORT
);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}


?>