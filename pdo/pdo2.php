<?php

$hostname = 'localhost';
$username = 'root';
$password = '';

// 数据源 data source name
$dsn = 'mysql:host=localhost;dbname=haiying';

try{
    $con = new PDO($dsn,$username,$password);
    // 增加数据操作   pdo statement 预处理
    // $result =$con->prepare("insert into student (name,age,gender,height,c_id) values('刘亦菲',25,'女',165,1)");
    // $res = $result -> execute();
    // 使用?占位符
    // $result =$con->prepare("insert into student (name,age,gender,height,c_id) values(?,?,?,?,?)");
    // $res = $result -> execute(array('bill','female',24,178,1));
    // $res = $result -> execute(array('Bob','male',28,168,1));
    // 使用:name占位符 不常用
    // $result =$con->prepare("insert into student (name,age,gender,height,c_id) values(:name,:age,:gender,:height,:c_id)");
    // $res = $result -> execute(array(':name'=>'bill',':age' => 24,':gender' => '男',':height' => 178,':c_id'=> 1));

    // 查询数据操作 fetch 和 fetchAll
    // $result = $con -> prepare("select * from student");
    // $res = $result -> execute();
    // if($res){
    //   // $row = $result -> fetch(PDO::FETCH_ASSOC);  // 从结果集中获取一行数据  参数是PDO类的常量
    //   while($row =$result -> fetch(PDO::FETCH_ASSOC)){
    //     echo "<pre>";
    //     var_dump($row);
    //   }
    // }

    // 修改数据操作
    // $result = $con -> prepare("update student set age = 18 where id = 10");
    // $res = $result -> execute();
    // if($res){
    //  echo '修改成功';
    // }


    // 删除数据
    // $result = $con -> prepare("delete from student where id = 10 or 1 = '1'");  // sql注入
    $result = $con -> prepare("delete from student where id = '?'");  // 防止sql注入  ? 传入的数据会被当做一个整体来对待。
    $id = "1or'1='1";
    $res = $result -> execute(array($id));
    if($res){
     echo '删除成功';
    }


}catch(PDOException $e){
    echo $e->getMessage();
}
?>


<?php
   /*
   预处理：



   */




?>

