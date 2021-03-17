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
				<?php
					foreach($heros as $hero)
					{
						echo "<li>$hero</li>";
					}
				?>
			</ul>
		</h1>
	</header>
</body>
</html>