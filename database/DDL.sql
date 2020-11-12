-- Project Name : noname
-- Date/Time    : 2020/11/10 10:57:05
-- Author       : NEC
-- RDBMS Type   : MySQL
-- Application  : A5:SQL Mk-2

SET sql_mode = '';

-- ユーザ所属情報
drop table if exists user_subreddit_links cascade;

create table user_subreddit_links (
  id int not null AUTO_INCREMENT
  , user_id int not null
  , subreddit int not null
  , role int
  , created_at timestamp
  , updated_at timestamp
  , deleted_at datetime
  , constraint user_subreddit_links_PKC primary key (id)
);

-- 評価ログ
drop table if exists evaluation_logs cascade;

create table evaluation_logs (
  id int not null AUTO_INCREMENT
  , post_id int not null
  , user_id int not null
  , evaluation int
  , created_at timestamp
  , updated_at timestamp
  , deleted_at datetime
  , constraint evaluation_logs_PKC primary key (id)
);

-- 投稿
drop table if exists posts cascade;

create table posts (
  id int not null AUTO_INCREMENT
  , subreddit_id int not null
  , post_type int
  , title varchar(300)
  , body text
  , attachment text
  , parent_id int
  , user_id int not null
  , evaluation int
  , created_at timestamp
  , updated_at timestamp
  , deleted_at datetime
  , constraint posts_PKC primary key (id)
);

-- サブレディット
drop table if exists subreddits cascade;

create table subreddits (
  id int not null AUTO_INCREMENT
  , category_id int not null
  , subreddit_name varchar(50)
  , created_at timestamp
  , updated_at timestamp
  , deleted_at datetime
  , constraint subreddits_PKC primary key (id)
);

-- カテゴリ
drop table if exists categories cascade;

create table categories (
  id int not null AUTO_INCREMENT
  , category_name varchar(50)
  , updated_at timestamp
  , created_at timestamp
  , deleted_at datetime
  , constraint categories_PKC primary key (id)
);

-- ユーザ情報
drop table if exists users cascade;

create table users (
  id int not null AUTO_INCREMENT
  , name varchar(50) not null
  , email varchar(100) not null
  , email_verified_at timestamp
  , password varchar(255)
  , created_at timestamp
  , updated_at timestamp
  , deleted_at datetime
  , constraint users_PKC primary key (id)
);

