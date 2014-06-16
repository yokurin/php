<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Test</title>
	</head>

	<body>
		<?php

		$age = mb_convert_kana($_REQUEST['age'],'n','UTF-8');

		if(is_numeric($age))
		{
			print($age.'歳');
		}
		else
		{
			print('※年齢は数字でご記入ください');
		}
		
		?> 

	</body>

</html>