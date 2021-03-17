<!DOCTYPE html>
<html>
<head>
	<title>PHP-Tutorial</title>
</head>
<style type="text/css">
	h1{
		background: gray;
		padding: 2em;
		text-align: center;
	}
</style>
<body>
	<header>
		<h1>
			<ul>
			</ul>
		</h1>
	</header>
	<?php
		if($task['status'])
		{
			echo "&#9989";
		} 
		else
		{
			echo "Task Incomplete.";
		}
	?>
</body>
</html>