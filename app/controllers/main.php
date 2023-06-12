<?php

namespace App;

use Core\Controller;
use Core\Attributes\route;

class Main extends Controller
{
	public function index()
	{
		echo "This Welcome::index";
	}

	#[route(method: route::get, uri: "login")]
	public function test()
	{
		echo "Hello this is test functi0n";
	}
}