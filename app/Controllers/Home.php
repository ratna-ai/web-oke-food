<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home Page | Oke Frozen Food'
		];	

		return view('home', $data);
	}
}
