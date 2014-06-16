<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Test</title>
	</head>

	<body>
		ご予約日：
		<br/>

		<?php
			foreach ($_REQUEST['reserve'] as $reserve)
			{
				print (htmlspecialchars($reserve,ENT_QUOTES). '<br />'); 
			}
		
		echo mb_internal_encoding();
		?> 

	</body>

</html>