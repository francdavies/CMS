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


# For Local and Live web Database


$db['db_host'] = getenv("DB_HOST") ?: "localhost";
$db['db_user'] = getenv("DB_USER") ?: "root";
$db['db_pass'] = getenv("DB_PASS") ?: "";
$db['db_name'] = getenv("DB_NAME") ?: "cms";
$db['db_port'] = getenv("DB_PORT") ?: "3306";

foreach($db as $key => $value){
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