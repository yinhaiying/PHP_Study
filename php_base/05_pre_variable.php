<?php
  echo "<h2>预定义变量</h2>";
  echo "<hr/>";




   // 通过$_GET变量获得表单以GET方法提交的数据
   $userName = $_GET['username'];
   $age = $_GET['age'];
   echo '<br/> 姓名：',$userName;
   echo '<br/> 年龄：',$age;

   echo "<br/>",$_SERVER['PHP_SELF'];     //  请求网址      /php_base/05_pre_variable.php
   echo "<br/>",$_SERVER['SERVER_NAME'];  //  请求的服务器名称    www.haiyinga.com
   echo "<br/>",$_SERVER['SERVER_ADDR'];  //  请求的ip地址   127.0.0.1
   echo "<br/>",$_SERVER['DOCUMENT_ROOT'];  // 请求的物理路径 也就是网站的实际保存位置   C:/Users/xxx/Desktop/project/php_example
   echo "<br/>",$_SERVER['REMOTE_ADDR'];  //   请求的客户端的IP地址  127.0.0.1
   echo "<br/>",$_SERVER['SCRIPT_NAME'];  //   请求的客户端的IP地址  127.0.0.1

     /**
   *
   * 预定义变量：
   * 在PHP中存在一些定义好的变量，这些变量可以直接使用。主要包括：
   * $_GET :可以获得表单以GET方法提交的数据  $_GET['username']
   * $_POST:可以获得以POST方法提交的数据     $_POST['age']
   * $_REQUEST:既能够获取到通过GET传递过来的数据，又能够获取到通过POST传递过来的数据  $_REQUEST['sex']
   * $_SERVER:代表任何一次请求时，客户端和服务端的一些基本信息或者系统信息，大概有10来个都是固定的。
   *   PHP_SELF:      表示当前请求的网页地址(不含域名部分)
   *   SERVER_NAME:    表示当前请求的服务器名
   *   SERVER_ADDR:  表示当前请求的服务器IP地址
   *   DOCUMENT_ROOT: 表示当前请求的网站物理路径（apache设置站点时那个)
   *   REMOTE_ADDR:   表示当前请求的客户端的IP地址
   *   SCRIPT_NAME:   表示当前网页地址
   */
?>
