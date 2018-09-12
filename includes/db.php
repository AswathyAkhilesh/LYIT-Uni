<?php

// Create database conbnection array
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'interview';

// Convert to constant (UpperCase)
foreach($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    // if($connection) {
    //     echo 'Database is connected';
    // }else{
    //     echo 'problem with database connection';
    // }
?>