-- Project Name : noname
-- Date/Time    : 2020/11/10 10:29:41
-- Author       : NEC
-- RDBMS Type   : MySQL
-- Application  : A5:SQL Mk-2

/*
  BackupToTempTable, RestoreFromTempTable疑似命令が付加されています。
  これにより、drop table, create table 後もデータが残ります。
  この機能は一時的に $$TableName のような一時テーブルを作成します。
*/

-- ユーザ所属情報
--* BackupToTempTable
drop table if exists user_subreddit_links cascade;

--* RestoreFromTempTable
create table user_subreddit_links (
  id int not null AUTO_INCREMENT comment 'id'
  , user_id int not null comment 'ユーザ'
  , subreddit int not null comment 'サブレディットID'
  , role int comment '権限'
  , created_at timestamp comment '作成日時'
  , updated_at timestamp comment '更新日時'
  , deleted_at timestamp comment '削除日時'
  , constraint user_subreddit_links_PKC primary key (id)
) comment 'ユーザ所属情報' ;

-- 評価ログ
--* BackupToTempTable
drop table if exists evaluation_logs cascade;

--* RestoreFromTempTable
create table evaluation_logs (
  id int not null comment 'id'
  , post_id int not null comment '投稿ID'
  , user_id int not null comment 'ユーザID'
  , evaluation int comment '評価'
  , created_at timestamp comment '作成日時'
  , updated_at timestamp comment '更新日時'
  , deleted_at timestamp comment '削除日時'
  , constraint evaluation_logs_PKC primary key (id)
) comment '評価ログ' ;

-- 投稿
--* BackupToTempTable
drop table if exists posts cascade;

--* RestoreFromTempTable
create table posts (
  id int not null AUTO_INCREMENT comment 'id'
  , subreddit_id int not null comment 'サブレディット'
  , post_type int comment '投稿タイプ'
  , title varchar(300) comment 'タイトル'
  , body text comment '投稿内容'
  , attachment text comment '添付'
  , parent_id int comment '親投稿ID'
  , user_id int not null comment '投稿者'
  , evaluation int comment '評価'
  , created_at timestamp comment '作成日時'
  , updated_at timestamp comment '更新日時'
  , deleted_at timestamp comment '削除日時'
  , constraint posts_PKC primary key (id)
) comment '投稿' ;

-- サブレディット
--* BackupToTempTable
drop table if exists subreddits cascade;

--* RestoreFromTempTable
create table subreddits (
  id int not null AUTO_INCREMENT comment 'id'
  , category_id int not null comment 'カテゴリーID'
  , subreddit_name varchar(50) comment 'サブレディット名'
  , created_at timestamp comment '作成日時'
  , updated_at timestamp comment '更新日時'
  , deleted_at timestamp comment '削除日時'
  , constraint subreddits_PKC primary key (id)
) comment 'サブレディット' ;

-- カテゴリ
--* BackupToTempTable
drop table if exists categories cascade;

--* RestoreFromTempTable
create table categories (
  id int not null AUTO_INCREMENT comment 'id'
  , category_name varchar(50) comment 'カテゴリ名'
  , updated_at timestamp comment '更新日時'
  , created_at timestamp comment '作成日時'
  , deleted_at timestamp comment '削除日時'
  , constraint categories_PKC primary key (id)
) comment 'カテゴリ' ;

-- ユーザ情報
--* BackupToTempTable
drop table if exists users cascade;

--* RestoreFromTempTable
create table users (
  id int not null AUTO_INCREMENTS comment 'ID'
  , name varchar(50) not null comment 'ユーザ名'
  , email varchar(100) not null comment 'メールアドレス'
  , email_verified_at timestamp comment 'メール確認日時'
  , password varchar(255) comment 'パスワード'
  , created_at timestamp comment '作成日時'
  , updated_at timestamp comment '更新日時'
  , deleted_at timestamp comment '削除日時'
  , constraint users_PKC primary key (id)
) comment 'ユーザ情報' ;

