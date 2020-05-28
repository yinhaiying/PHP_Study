<?php

$hostname = 'localhost';
$username = 'root';
$password = '';

// 数据源 data source name
$dsn = 'mysql:host=localhost;dbname=haiying';

try{
    $pdo = new PDO($dsn,$username,$password);
    // 新增数据
    // $sql = "insert into student (name,age,gender,height,c_id) values('李四',25,'男',187,1)";
    // $res = $pdo -> exec($sql);
    // 修改数据
    // $sql = "update student set name = '王五' where id = 4";
    // 查询数据
    // $sql = "select * from student";
    // $res = $pdo -> query($sql);
    // 删除数据  不返回结果集使用exec方法
    // $sql = "delete from student where id = 4";
    // $res = $pdo -> exec($sql);

    $sql = "delete from student where id = 4";
    $res = $pdo -> exec($sql);
    var_dump($res);
}catch(PDOException $e){
    echo $e->getMessage();
}
?>


<?php
  /*
  exec和query的区别：
  exec是返回受影响的函数，通常用于新增和更新操作。没有结果集。
  query是返回一个结果集，需要通过遍历来进行操作。
  */

  /*
  sql注入：就是通过把sql命令插入到web表单里面提交或者输入域名或者页面请求的查询字符串，
  最终达到欺骗服务器执行的恶意的sql命令。
  */
?>
