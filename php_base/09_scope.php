<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>作用域</title>
</head>
<body>
<?php
/***
 *变量的作用域问题：
 * 简单的来说，有3种作用域：局部作用域，全局作用域和超全局作用域
 * 对应的来说，有三种变量：局部变量，全局变量，超全局变量
 *
 *
 * 局部作用域：函数内部范围的作用域，其中定义的变量就是局部变量（包括形参也是局部变量）
 *  1. 局部变量只能在它的函数内访问
 *  2. 局部变量在函数调用结束后，会被自动销毁
 *  3. 静态变量:一个特殊的局部变量，在函数调用结束后，静态变量不会被销毁.在函数内部，使用static关键字进行修饰
 */


 function func1(){
   $v1 = 10;
   static $v2 = 10;
   $v1++;
   $v2++;
   echo "<br/>v1的值是".$v1;
   echo "<br/>v2的值是".$v2;
 }

 func1();
 func1(); // v1=11  v2 = 12




?>

</body>
</html>
