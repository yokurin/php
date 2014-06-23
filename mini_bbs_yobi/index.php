<?php
	session_start();
	require ('join/dbconnect.php');
	
	if(isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time())
	{
		//ログインしている
		$_SESSION['time'] = time();
		
		$sql = sprintf('SELECT * FROM members WHERE id=%d',
						mysql_real_escape_string($_SESSION['id'])
						);
		$record = mysql_query($sql) or die(mysql_error());
		$member = mysql_fetch_assoc($record);
	}else
	{
		//ログインしていない
		header('Location:join/login.php');
	}
	
	//投稿を記録する
	if(!empty($_POST))
	{
		if($_POST['message'] != '')
		{
			$sql = sprintf('INSERT INTO posts SET member_id=%d,message="%s",created=NOW()',
							mysql_real_escape_string($member['id']),
							mysql_real_escape_string($_POST['message'])		
							);
		mysql_query($sql) or die(mysql_error());
		
		header('Location: index.php');
		
		}
	}
	
	//投稿を表示する
	$sql = sprintf('SELECT m.name, m.picture, p.*FROM members m, posts p WHERE m.id=p.member_id ORDER BY p.created DISC');
	$posts = mysql_query($sql) or die(mysql_error());
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/xhtml11/DTD/xhtml11-transitional.dtd">

<html xmls-"http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Contents-Type" content="text/html; charset=UTF-8"/>
		<link rel="stylesheet" type="test/css" href="style.css" />
		<title>ひとこと掲示板</title>
	</head>
	
	<body>
		<div id="wrap">
			<div id="head">
				<h1>ひとこと掲示板</h1>
			</div>
			<div id="content">
				<form action="" method="post">
					<dl>
						<dt><?php echo htmlspecialchars($member['name']);?>さんメッセージをどうぞ</dt>
						<dd>
							<textarea name="message" cols="50" rows="5"></textarea>
						</dd>
					</dl>
					<div>
						<input type="submit" value="送信する"/>
					</div>
				</form>
			</div>
			
			<?php 
				while($post = mysql_fetch_assoc($posts)):
			?>
				<div class="msg">
					<img src="member_picture/ >
				</div>
			
			<div id"foot">
				<p><img scr="img/txt_copyright.png" width="136" height="15" alt="(c) H20.space.MYCOM" /></p>
			</div>
			
		</div>
	</body>
</html>
