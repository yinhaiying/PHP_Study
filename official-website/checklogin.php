<?php

// 1. 接收数据
  $username = $_POST['username'];
  $password = $_POST['password'];
// 2. 验证数据有效性
  if(empty($username)){
    echo '用户名不能为空';
    exit;
  }
  if(strlen($password) < 6){
    echo '密码长度不能小于6位数';
    exit;
  }




?>
