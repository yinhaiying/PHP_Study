# 类属性

## 概述
在一列里面，主要的约束字段是数据类型，但是还有其他的字段来进行约束，从而确保数据的合理性。比如：
not null/null,default,comment,primary key,unique key,auto_crement和unsigned等。

## 空属性
有两个值:null和not null，默认为null。在没有设计not null的时候，基本上默认为空。
语法：alter table student modify name varchar(10) not null;
1. 从优化的角度，每个字段都应该设置为not null。
2. 设置为not null时，如果没有插入数据，则插入一个空的字符串。

## 默认值
默认值：某种数据会经常性地出现某个值，可以在一开始就指定好，这个值就是默认值。

## 主键
主键(primary key)：
1. 用来唯一地约束该数据（保证数据的唯一性）
2. 作为一个索引

### 添加主键:
1. 直接在字段后面添加primary key关键字（主键本身不能为空）。
```sql
 create table my_primary_key(
    -> id int(10) not null primary key comment '主键',
    -> name varchar(10) not null comment '名称');
```

2.  在创建表的时候，在所有字段之后，使用primary key来创建主键（最常用）。
```sql
 create table my_primary_key1(
    -> name varchar(10) not null comment '姓名',
    -> age int(2) not null comment '年龄',
    -> primary key(name)
    -> );
```
3. 表已经创建好以后，通过修改表的字段属性额外追加主键。
```sql
// 先创建好表
 create table my_primary_key2(
    -> name varchar (10) not null,
    -> age int(2) not null
    -> );
// 再设置主键
alter table my_primary_key2 add primary key (name);
```
注意，使用这种方式追加主键时，必须确保字段的数据是唯一的。

### 删除主键

语法：
```sql
alter table 表名 drop primary key;

```

### 更新主键
MySQL中没有提供语法来更新主键，只能通过先删除然后再添加主键的方式来更新主键。
语法：
```sql
alter table 表名 drop primary key;
alter table 表名 add primary key;
```

## 自动增长(auto_increment)
auto_increment:当对应的字段不给值，或者说没有默认值，或者给null的时候，会自动地被系统触发，
系统会从当前的字段中已有的最大值进行加1操作,，得到一个新的值。
注意：
1. 任何字段要做自动增长，前提是本身是作为一个索引（必须是一个主键）。
2. 自增长字段必须是数字（可以是整型和浮点型）。
3. 一张表只能有一个自增长（因为自增长必须是一个主键，一张表只能有一个主键）
4. 当自动增长的字段被给定null或者default的时候，仍然会触发自动增长。自动增长的字段最好不要去插入值。

## 唯一键(unique key)
唯一键：在一张表中主键是唯一的，但是有时候我们还需要确保其他字段也是唯一的，这时候又不能设置所有的这些字段都是
主键，这个时候唯一键就可以解决字段唯一性的问题。
### 增加唯一键
三种方式与增加主键一样。
1. 在字段后面添加添加unique key 关键字 。
2. 在所有字段后面使用unique key(字段)关键字。
```sql
create table my_unique(
    -> id int unsigned not null primary key,
    -> name varchar(10) not null,
    -> password int(10),
    -> unique key (password)
    -> );
```


