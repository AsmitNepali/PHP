<?php 
namespace App\Controllers;
use App\Core\App;

	class PageController{
		public function home(){
			// die('home');
			$tasks = App::get('database')->selectAll('todo','Task'); //Select from todo and map into Task Class
			require 'views/index.view.php';
		}

		public function about(){
			$data = [
				'name'=>'Asmit',
			];
			return view('about',compact('data'));
		}

		public function contact(){
			require 'views/contact.view.php';
		}
	}
