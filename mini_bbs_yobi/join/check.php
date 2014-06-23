<?php 
session_start();
require('dbconnect.php');

if(!isset($_SESSION['join']))
{
	header('Location: index.php');
}

if(!empty($_POST))
{
	//登録処理する
	$sql = sprintf('INSERT INTO member SET name="%s",email="%s",password="%s",picture="%s",created="%s"',
		mysql_real_escape_string($_SESSION['join']['name']),
		mysql_real_escape_string($_SESSION['join']['email']),
		shal(mysql_real_escape_string($_SESSION['join']['password'])),
		mysql_real_escape_string($_SESSION['join']['image']),
		date('Y-m-d H:i:s')
		);
	mysql_query($sql) or die(mysql_error());
	unset($_SESSION['join']);

	header('Location: thanks.php');
}

?>

<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="action" value="submit" />
	<dl>
		<dt>ニックネーム</dt>
		<?php echo htmlspecialchars($_SESSION['join']['name'],ENT_QUOTES,'UTF-8'); ?><dd>
		</dd>

		<dt>メールアドレス</dt>
		<dd>
		<?php echo htmlspecialchars($_SESSION['join']['email'],ENT_QUOTES,'UTF-8'); ?>
		</dd>

		<dt>パスワード</dt>
		<dd>
		<?php echo htmlspecialchars($_SESSION['join']['password'],ENT_QUOTES,'UTF-8'); ?>
		</dd>

		<dt>写真など</dt>
		<dd>
		<img src="../member_picture/<?php echo $_SESSION['join']['image']; ?>" width="100" height="100" alt="" />
		</dd>
	</dl>
	<div>
		<a href="index.php?action=rewrite">&laquo;&nbsp;書き直す</a>

		<input type="submit" value="送信する"></div>
</form>
