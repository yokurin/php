<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Test</title>
	</head>

	<body>
		<?php
		mb_language("japanese");
		mb_internal_encoding("UTF-8");


		if(!empty($_POST['email']))
		{
			$to = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$from = mb_encode_mimeheader(mb_convert_encoding("たにぐちまこと","JIS","UTF-8" ))."<support@aaa.com>";

			$success = mb_send_mail($to, $subject, $message,"From:".$from);

		}
		?>

		<?php
		if(success)
		{
			print('送信しました');
		} 
		else
		{
			print('送信に失敗しました');
		}
		?>

	</body>

</html>