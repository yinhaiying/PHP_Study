<?php

/*
* @params
*
*/
function mysqlInit($host,$username,$password,$dbName){
// 连接数据库
  $dsn = "mysql:host={$host};dbname={$dbName}";
  try{
      $con = new PDO($dsn,$username,$password);
      if(!$con){
        return false;
      }
      return $con;
  }catch(PDOException $e){
      echo $e->getMessage();
  }
}








?>
