<!DOCTYPE html>
<html>
<head>
	<title>PHP-Tutorial</title>
</head>
<style type="text/css">
	/*h1{
		background: gray;
		padding: 2em;
		text-align: center;
	}*/
</style>
<body>
	<header>
		<h1>
			<ul>
			</ul>
		</h1>
	</header>
	<ul>
		<?php foreach($tasks as $task):?>
			<li><?= $task->description; ?></li>
		<?php endforeach?>
	</ul>
</body>
</html>