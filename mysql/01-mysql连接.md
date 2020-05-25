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
语法：alter table 表名 add column 字段名称 字段类型 [first|after 字段名称];
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
表数据操作是对数据库中表记录的操作，主要包括表记录的插入（insert）、更新（update）、删除（delete）和查询（select）。
一、插入数据
语法1：insert into 表名 (字段1，字段2) values (值1，值2);
insert into hai_student (name,age) values ('hello',24);

语法2：insert into 表名 values (值列表)
字段和值必须一一对应

插入数据时，可空字段、非空但是含有默认值的字段、自增字段等，可以不用在insert后的字段列表里出现，values后面只写对应字段名称的values。
比如表中有name,age,sex三个字段，其中sex可以为空，那么我们插入时可以只设置name和age字段的值，示例：
insert into hai_student (name,age) values('hello',24);

支持同时插入多条语句：
insert into tablename (field1,field2) values (record1_value1,record1_value2),(record2_value1,record2_value2);


二、查看数据：
select */字段列表 from 表名；
select name from hai_student;

三、更改数据
语法：
update 表名 set 字段名称 = 新值 [where条件];
注意：where条件如果不选会把所有的数据都修改;
update student set name = 'mayun' where name = 'Bob';
最好是使用主键去查询

四、删除数据
语法：
delete from 表名 [where条件];
注意：如果没有where条件，会把所有的数据都删除掉。
delete from student where name = 'mayun';
```sql
delete from student where name = "Bob" limit 3;
```
delete删除数据表不会影响auto_increment。
truncate清空表：
```sql
truncate student;
```
truncate清空数据表，表结构的auto_increment会彻底删除，从1开始。

总结：
使用delete删除数据，不会改变表结构，也不会重置自动增长
使用truncate清空数据表，不会改变表结构，但是会重置自动增长


## 查询数据
基本语法：select */字段列表 from 表名[where条件]
**高级查找语法**
select [select 选项] 字段列表[字段别名] /* from 数据源
