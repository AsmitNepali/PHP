<?php
	class Post{
		public $title;

		public $publisheStatus;

		public function __construct($title, $status){
			$this->title = $title;
			$this->publisheStatus = $status;
		}
}
$post = [
			new Post('My fist post', true),
			new Post('My second post', true),
			new Post('My third post', true),
			new Post('My fourth post', false)
		];
var_dump($post);