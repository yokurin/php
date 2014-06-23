<?php
	mysql_connect('localhost','root','root') or die(mysql_error());
	//echo 'データベースに接続しました';
	mysql_select_db('mini_bbs');
	//echo '<br />データベーススペース[mydb]を選択しました';
	mysql_query('SET NAMES UTF8');
?>