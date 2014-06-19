<?php
	mysql_connect('localhost','root','root') or die(mysql_error());
	mysql_select_db('mydb');
	mysql_query('SET NAMES UTF8');

	$mysql = sprintf('INSERT INTO my_items SET maker_id="%s",item_name="%s",price=%d,keyword="%s"',
						mysql_real_escape_string($_POST['maker_id']),
						mysql_real_escape_string($_POST['item_name']),
						mysql_real_escape_string($_POST['price']),
						mysql_real_escape_string($_POST['keyword'])
					);
	mysql_query($mysql) or die(mysql_error());
?>

<p>商品登録しました</p>