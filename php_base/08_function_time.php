<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>常用时间函数</title>
</head>
<body>
<?php

/**
 * time:获得当前时间，精确到秒。结果其实时是一个整数，代表从1970年1月1日 0:0:0秒到当前时刻的秒数。
 *
 *
 *
 *
 *
 *
 */

 $time1 = time();  // 1576812632
 echo $time1;
 echo "<br>";
 $micor_time = microtime(true);  // 获取包含微秒的时间
 echo $micor_time;
 echo "<br>";
 $date = date('Y-m-d H:i:s');  // 获取包含微秒的时间
 echo $date;
 echo "<br>";





?>

</body>
</html>
