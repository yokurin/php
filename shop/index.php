<?php
	mysql_connect('localhost','root','root') or die(mysql_error());
	//echo 'データベースに接続しました';
	mysql_select_db('mydb') or die(mysql_error());
	//echo '<br />データベーススペース[mydb]を選択しました';
	mysql_query('SET NAMES UTF8');
	/*
	mysql_query('INSERT INTO my_items SET maker_id=1,item_name="もも",price=210,keyword="缶詰,ピンク,甘い",sales=0,created="2010-08-01",modified="2010-08-01"') or die(mysql_error());
	echo'データ挿入しました';*/

	//１、２件目をDBから取り出す方法
	/*$recordSet = mysql_query('SELECT * FROM my_items') or die(mysql_error());
	$data = mysql_fetch_assoc($recordSet);
	echo $data['item_name'];
	$data = mysql_fetch_assoc($recordSet);
	echo '<br />' . $data['item_name']
	*/

	//DBから全データを取り出す方法
	$recordSet = mysql_query('SELECT*FROM my_items');

	while($data = mysql_fetch_assoc($recordSet))
	{
		echo $data['item_name'];
		echo '<br />';
	}


?>