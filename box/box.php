<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Test</title>
	</head>

	<body>
		<?php
		print ('性別： '. htmlspecialchars($_POST[''],ENT_QUOTES)); 
		echo mb_internal_encoding();
		?> 

	</body>

</html>