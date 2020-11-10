-- Project Name : noname
-- Date/Time    : 2020/11/10 10:29:41
-- Author       : NEC
-- RDBMS Type   : MySQL
-- Application  : A5:SQL Mk-2

/*
  BackupToTempTable, RestoreFromTempTable�^�����߂��t������Ă��܂��B
  ����ɂ��Adrop table, create table ����f�[�^���c��܂��B
  ���̋@�\�͈ꎞ�I�� $$TableName �̂悤�Ȉꎞ�e�[�u�����쐬���܂��B
*/

-- ���[�U�������
--* BackupToTempTable
drop table if exists user_subreddit_links cascade;

--* RestoreFromTempTable
create table user_subreddit_links (
  id int not null AUTO_INCREMENT comment 'id'
  , user_id int not null comment '���[�U'
  , subreddit int not null comment '�T�u���f�B�b�gID'
  , role int comment '����'
  , created_at timestamp comment '�쐬����'
  , updated_at timestamp comment '�X�V����'
  , deleted_at timestamp comment '�폜����'
  , constraint user_subreddit_links_PKC primary key (id)
) comment '���[�U�������' ;

-- �]�����O
--* BackupToTempTable
drop table if exists evaluation_logs cascade;

--* RestoreFromTempTable
create table evaluation_logs (
  id int not null comment 'id'
  , post_id int not null comment '���eID'
  , user_id int not null comment '���[�UID'
  , evaluation int comment '�]��'
  , created_at timestamp comment '�쐬����'
  , updated_at timestamp comment '�X�V����'
  , deleted_at timestamp comment '�폜����'
  , constraint evaluation_logs_PKC primary key (id)
) comment '�]�����O' ;

-- ���e
--* BackupToTempTable
drop table if exists posts cascade;

--* RestoreFromTempTable
create table posts (
  id int not null AUTO_INCREMENT comment 'id'
  , subreddit_id int not null comment '�T�u���f�B�b�g'
  , post_type int comment '���e�^�C�v'
  , title varchar(300) comment '�^�C�g��'
  , body text comment '���e���e'
  , attachment text comment '�Y�t'
  , parent_id int comment '�e���eID'
  , user_id int not null comment '���e��'
  , evaluation int comment '�]��'
  , created_at timestamp comment '�쐬����'
  , updated_at timestamp comment '�X�V����'
  , deleted_at timestamp comment '�폜����'
  , constraint posts_PKC primary key (id)
) comment '���e' ;

-- �T�u���f�B�b�g
--* BackupToTempTable
drop table if exists subreddits cascade;

--* RestoreFromTempTable
create table subreddits (
  id int not null AUTO_INCREMENT comment 'id'
  , category_id int not null comment '�J�e�S���[ID'
  , subreddit_name varchar(50) comment '�T�u���f�B�b�g��'
  , created_at timestamp comment '�쐬����'
  , updated_at timestamp comment '�X�V����'
  , deleted_at timestamp comment '�폜����'
  , constraint subreddits_PKC primary key (id)
) comment '�T�u���f�B�b�g' ;

-- �J�e�S��
--* BackupToTempTable
drop table if exists categories cascade;

--* RestoreFromTempTable
create table categories (
  id int not null AUTO_INCREMENT comment 'id'
  , category_name varchar(50) comment '�J�e�S����'
  , updated_at timestamp comment '�X�V����'
  , created_at timestamp comment '�쐬����'
  , deleted_at timestamp comment '�폜����'
  , constraint categories_PKC primary key (id)
) comment '�J�e�S��' ;

-- ���[�U���
--* BackupToTempTable
drop table if exists users cascade;

--* RestoreFromTempTable
create table users (
  id int not null AUTO_INCREMENTS comment 'ID'
  , name varchar(50) not null comment '���[�U��'
  , email varchar(100) not null comment '���[���A�h���X'
  , email_verified_at timestamp comment '���[���m�F����'
  , password varchar(255) comment '�p�X���[�h'
  , created_at timestamp comment '�쐬����'
  , updated_at timestamp comment '�X�V����'
  , deleted_at timestamp comment '�폜����'
  , constraint users_PKC primary key (id)
) comment '���[�U���' ;

