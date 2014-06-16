<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Test</title>
	</head>

	<body>
		<?php
			if(empty($_REQUEST['my_name']))
			{
				print('名前を記入してください</ br>');
			}
			else
			{
				print('正しく入力されています');
			}
		?> 

	</body>

</html>