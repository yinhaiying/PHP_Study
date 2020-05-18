<?php

function mysqlInit($host,$username,$password,$dbName){
// 连接数据库
  $con = mysql_connect($host,$username,$password);
  if(!$con){
      return false;
  }
  // 选择数据库
  mysql_select_db($dbName);
  // 设置字符集
  mysql_set_charset('utf-8');

  return $con;
}








?>
