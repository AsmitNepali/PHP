<?php 
use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;
// For configuration
App::bind('config', require 'config.php');

App::bind('database', new  QueryBuilder(
	Connection::make(App::get('config')['database'])
));

function view($file,$data=[]){
	extract($data);
	return require('app/views/'.$file.'.view.php');
}

function redirect($loacation){
	// header('loacation','');
}