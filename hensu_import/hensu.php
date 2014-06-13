<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Test</title>
	</head>

	<body>
		<?php
		$name = htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES);
		?> 
		<p>ようこそ<?php print (htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?>さん</p>
		<ul>
			<li><a href="#"><?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?>さんのページをみる
		</ul>
	</body>

</html>