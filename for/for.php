<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Test</title>
	</head>

	<body>
		<select name="age" id="age">
		<?php
		for ($i=10;$i<=100;$i++)
		{
			print('<option value="' .$i .'">'.$i.'歳</option>');
		}
		?> 
		</select>
	</body>

</html>