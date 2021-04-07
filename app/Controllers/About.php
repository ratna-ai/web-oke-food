<?php

namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
		$data = [
            'title'     => 'About Page | Oke Frozen Food'
        ];
        return view('about', $data);
	}
}
