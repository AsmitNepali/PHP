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
					foreach($person as $feature => $val):?>
						<!-- Html List -->
						<li><strong><?= $feature; ?></strong> <?= $val; ?></li>
					<?php endforeach ?>
			</ul>
		</h1>
	</header>
</body>
</html>