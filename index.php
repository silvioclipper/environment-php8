<?php

echo "'Hey, I, oh, I'm still alive.'";

$dsn = 'mysql:
        host=localhost;
        dbname=php_server_test';        
$user = 'user';
$password = 'userpassword';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($dbh){echo 'db connected';}
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
echo phpinfo();