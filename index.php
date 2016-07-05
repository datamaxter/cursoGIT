<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Curso de GIT - Webdev</title>
</head>
<body>
	<?php

		define('DS', DIRECTORY_SEPARATOR);
		define('ROOT', dirname(__DIR__));

		include ROOT.DS.'src'.DS.'core.php';
		include ROOT.DS.'src'.DS.'view.php';

		echo "<pre> DS=".DS." ROOT=".ROOT."</pre>");
	 
	?>
</body>
</html>