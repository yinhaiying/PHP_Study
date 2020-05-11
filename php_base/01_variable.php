<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP基础</title>
</head>
<body>
<?php
  echo "<h1>Hello</h1>";
  echo date("当前时间：Y年m月d日 H:m:s");

  echo "<br/>";
  echo "<br/>";
  echo "<br/>";
  // 变量
  $v1 = 1;
  $v2 = 3;
  $v3 = $v1 + $v2;
  $v4;
  echo $v3;

  //变量的四种操作：赋值，取值，变量判断，

  //变量是否有值的判断
  echo isset($v1);  // 实际结果为true,但是echo 输出为1
  echo "<br>";
  var_dump(isset($v1)); // bool(true)  var_dump 可以输出完整的信息
  echo '.................';
  var_dump(isset($v4));
  echo "<hr />";
  //销毁一个有值的变量
  unset($v1);
  var_dump(isset($v1));


  // 常量：


?>



</body>
</html>
