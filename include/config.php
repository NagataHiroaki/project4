<?php
//localhost�ƃT�[�o�̐؂�ւ��̓f�[�^�x�[�X�ݒ���㉺�Ő؂�ւ���
session_start(); //�Z�b�V�����X�^�[�g�i�����ł܂Ƃ߂Ă��܂��Ă����̂��H�j
date_default_timezone_set('Asia/Tokyo'); //�^�C���]�[����ݒ�

define('SITE_URL', $_SERVER['DOCUMENT_ROOT'].'/0817'); //�T�C�gURL

/************************�f�[�^�x�[�X�ݒ�************************/
//define('DB_HOST', 'mysql464.db.sakura.ne.jp');
//define('DB_USER', 'akinobu');
//define('DB_PASSWORD', 'passwd123');
//define('DB_NAME', 'akinobu_instagram');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '02101221');
define('DB_NAME', 'instagram_test');
/******************************************************************/

/************************Instagram�ݒ�*****************************/
define('CLIENT_ID', '59c8fca46ae944718a924a792ec07027');
define('CLIENT_SECRET', '0afbfe8798ca4fe7a4de53a1e6f62448');
/*******************************************************************/

function h($str){ return htmlspecialchars($str); } //HTML�ɏo�͂���Ƃ��ɃG�X�P�[�v����֐�

/************************body��class�U�蕪������***********************/
$home_url = "http://".$_SERVER["HTTP_HOST"]."/";
$file_name = basename( $_SERVER['PHP_SELF'], ".php" );
if($file_name !== "index"){
  $body_class = basename(dirname($_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]))." ".$file_name;
}else{
  $body_class = basename(dirname($_SERVER['PHP_SELF']));
  if($body_class == ""){
    $body_class = "home";
  }
}
/*************************************************************************/
/********************************SQL��************************************
create database instagram_test;

create table user(
	id int not null auto_increment primary key,
	insta_id int(255),
	email varchar(255),
	password varchar(255),
	lastname varchar(255),
	firstname varchar(255),
	sex int(1),
	birthday date,
	insta_access_token varchar(255),
	created datetime,
	modified datetime
);

*************************************************************************/
?>