<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>函数</title>
</head>
<body>
<?php
/**
* 函数：
*
* 函数参数的传值方式：
*   函数参数默认情况下是值传递(也就是说传递之后，形参和实参互不影响)。但是也可以使用&符号设定为引用传递，形式如下：
*   function f1($p1,&$p2){}
*   引用传递形参的改变会导致实参的改变(但是只有变量才能够实现引用传递)。
*
* 函数参数的形参的默认值：
* 形参可以设定默认值。形式为：$形参名 = 某值
* 1. 设定默认值的形参，只能放在没有设定默认值的后面
* 2. 设定默认值的形参对应的实参可以不提供数据，此时函数就会使用该默认值作为实参的值
* 3. 如果给默认形参传递实参，则实参会被覆盖
* 例如：function f2($f1,$f2,$f3 = 3){}
*
*  可变变量：就是变量名是一个变量。例如：$$v1;这里的变量名是$v1;
*
*  可变函数：
*    所谓可变函数，就是函数名是一个变量的情形。比如：
*    调用函数f1的语法是这样：f1();
*    可以使用可变函数的语法来掉哟i给你：$fun_name = "f1";$func_name();  // 此时实际上就是调用f1
*    1. 定义函数的时候不可以使用可变函数名，只能在调用时使用变量来替代函数名调用。
*
*  匿名函数：
*    所谓匿名函数，就是定义时没有函数的名字,例如：
*    $f1 = function(){};
*    调用：$f1();
*
*  常用系统函数介绍
*
*
*   1. 跟函数有关的函数
*     function_exists('函数名'):判断一个函数是否已经存在
*     func_get_arg($n):在函数内部可用，用于获得第n个实参(n从0开始)
*     func_get_args():在函数内部可用，用于获得所有实参，结果是一个数组
*     func_num_args():在函数内部可用，用于获得实参的个数。
*  以上几个函数可以用于在参数个数不确定的情况下，进行参数的获取。
*
*
*
*
*
*/
    ?>
  <?php

  function generateHr($n){
    for($i = 0; $i < $n; $i++){
      echo "<hr/>";
    }
  }

  generateHr(3);

  ?>

  <div>
    <?php
      echo "<p>这里是文字部分1</p>";
      generateHr(2);
     echo "<p>这里是文字部分2</p>";
      generateHr(2);
    ?>
  </div>


  <?php
      echo "<h3>函数参数的传值方式</h3>";
      function test($p1,&$p2){
        $p1++;
        $p2++;
      };

      $v1 = 10;
      $v2 = 10;

      test($v1,$v2);
      echo "\$v1的值是：".$v1;  // 10
      echo "\$v2的值是：".$v2;  // 引用传递进行传值：形参改变也会导致实参的改变。11


      echo "<h3>函数的默认参数</h3>";
      function test2($p1,$p2,$p3 = 3,$p4 = 4){
        echo "p1 = $p1";
        echo "p2 = $p2";
        echo "p3 = $p3";
        echo "p4 = $p4";
      }

      $s1 = 1;
      $s2 = 2;
      test2($s1,$s2);
      test2($s1,$s2,333);
      test2($s1,$s2,333,444);

      echo "<h3>跟函数有关的函数</h3>";
      function func_arg_test(){
        $args = func_get_args();
        $result = 0;
        for($i = 0;$i < sizeof($args);$i++){
          if($args[$i] % 2 != 0){
            $result += $args[$i];
          }
        }
        return $result;
      }
      echo '奇数的和为：'. func_arg_test(1,2,3);
      echo '<br/>';
      echo '奇数的和为：'. func_arg_test(1,2,3,4,5);
  ?>
</body>
</html>
