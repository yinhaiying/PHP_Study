
# 数据库的创建和数据表的设计

1. 管理员表
create table corp_admin(
  id int unsigned primary key auto_increment comment 'id标识',
  username varchar(20) not null comment '管理员用户名',
  password varchar(32) not null comment '管理员密码'
) comment '管理员表';

2. 单页模板表

create table corp_board(
  id int unsigned primary key auto_increment comment 'id标识',
  bordername varchar(20) not null comment '模块名称',
  content text comment '模块内容'
) comment '单页模板表';

3. 新闻表

create table corp_news(
  id int unsigned primary key auto_increment comment 'id标识',
  title varchar(60) not null comment '新闻标题',
  cate_id int default 0 comment '新闻分类id',
  author varchar(30) comment '新闻作者',
  content text not null comment '新闻内容',
  img varchar(70) comment '新闻图片',
  intime timestamp default current_timestamp comment '新闻发布时间',
  hits int default 0 comment '新闻点击率'
) comment '新闻表';

4. 产品表
create table corp_products(
  id int unsigned primary key auto_increment comment 'id标识',
  product_name varchar(60) not null comment '产品名称',
  product_num varchar(30)  comment '产品编号',
  cate_id int default 0 comment '产品分类id',
  content text not null comment '产品详细说明',
  img varchar(70) comment '产品图片',
  intime timestamp default current_timestamp comment '产品发布时间',
  hits int default 0 comment '产品点击率'
) comment '产品信息表';

5. 分类表
create table corp_category(
  id int unsigned not null primary key auto_increment,
  catename varchar(40) not null comment '分类名称',
  order_num tinyint unsigned default 5 comment '排序号'
) comment '分类表';

6. 友情链接表
create table corp_flink(
  id int unsigned not null primary key auto_increment,
  title varchar(30) comment '网站名称',
  link_url varchar(50) comment '网址',
  content varchar(50) comment '网站内容',
  intime timestamp default current_timestamp comment '创建时间'
) comment '友情链接表';

7. 留言表
create table corp_guestbook(
  id int unsigned not null primary key auto_increment,
  username varchar(30) comment '用户名',
  content text comment '留言内容',
  intime timestamp default current_timestamp comment '留言时间'
) comment '留言表';
