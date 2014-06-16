<?php
	session_start();

	if(isset($_POST['my_id']))
	{
		$_SESSION['my_id'] = $_POST['my_id'];
	}
?> 

<p>ようこそ<?php echo $_SESSION['my_id']; ?>さん</p>
<p><a href="./cookie_second.php">次のページへ</a></p>


