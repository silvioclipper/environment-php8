<?php

echo "'Hey, I, oh, I'm still alive.'";

$dsn = 'mysql:
        host=db;
        dbname=php_server_test
        port=3307';        
$user = 'root';
$password = 'root';

//try {
 //   $dbh = new PDO($dsn, $user, $password);
 //   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
//} catch (PDOException $e) {
 //   echo 'Connection failed: ' . $e->getMessage();
//}

$link = mysql_connect('localhost', 'root', 'root');

if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
$db_list = mysql_list_dbs($link);

while ($row = mysql_fetch_object($db_list)) {
     echo $row->Database . "\n";
}


echo phpinfo();