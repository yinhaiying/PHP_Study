# MYSQL

## 连接mysql
方式一：切换到mysql的bin目录才能够使用mysql命令
```
cd C:\xampp\mysql\bin
mysql -hlocalhost -P3306 -uroot -p
```
方式二：
设置mysql的环境变量,这样就可以在任何地方使用mysql命令了
```
mysql -uroot -p
```


## 库操作



## 表操作
use 数据库  先进入具体的数据库

一、新增数据表：
语法：create table 表名(字段名称 数据类型，字段名称 数据类型);

二、查看数据表
1.查看所有数据表：
语法：show tables;
2.查看部分数据表：模糊匹配:
语法：show tables like 'patten'  patten是匹配模式
show tables lke '%n';  匹配以n结尾数据表

3.查看创建的语句：
语法：show create table 表名;

show create table hai_person \G;  \G表示纵向排列

4.查看表结构：查看表中字段意思:
语法：desc 表名;

三、修改数据表
修改数据表分为两部分：修改表本身和修改表中字段

修改表本身
修改表名：
语法：rename table 旧表名 to 新表名;
修改字符集（很少操作）





修改表中字段:新增字段 修改字段的数据类型 重命名字段  删除字段
新增字段：
语法：alter table 表名 add column 字段名称 字段类型；
alter table hai_person add column age int;
将字段添加在指定位置：
语法：alter table 表名 add column 字段名称 字段类型 after 字段名称;
alter table hai_person add column gender varchar(10) after age;

修改字段数据类型：
alter table 表名 modify 字段名 修改后的数据类型
alter table hai_person modify password char(32);

重命名字段：
alter table 表名 change 原来的字段名 修改后的字段名 修改后字段的数据类型;

删除字段：
alter table 表名 drop 字段名;


四、删除数据表：
drop table + 表名;

## 数据操作
一、插入数据
语法1：insert into 表名 (字段1，字段2) values (值1，值2);
insert into hai_student (name,age) values ('hello',24);

语法2：insert into 表名 values (值列表)
字段和值必须一一对应

二、查看数据：
select */字段列表 from 表名；
select name from hai_student;
