<?php

$hostname = 'localhost';
$username = 'root';
$password = '';

// 数据源 data source name
$dsn = 'mysql:host=localhost;dbname=haiying';

try{
    $pdo = new PDO($dsn,$username,$password);
    var_dump($pdo);
}catch(PDOException $e){
    echo $e->getMessage();
}
?>