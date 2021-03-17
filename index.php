<?php
	$heros = [
		'Spider Man',
		'Iron Man',
		'Hulk',
		'Thor',
		'Dr.Strange'
		];

	foreach($heros as $key=>$hero){
		echo $hero.' ';
	}
	require('index.view.php');