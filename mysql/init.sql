create database News charset utf8;

create table n_news(
id int primary key auto_increment,
title varchar(50) not null comment '新闻标题',
isTop tinyint not null comment '是否置顶',
content text comment '内容',
publiser varchar(20) not null comment '发布人',
pub_time int not null comment '发布时间'
)charset utf8;