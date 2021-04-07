<?php

namespace App\Controllers;

class Pesan extends BaseController
{
	public function index()
	{
		$data = [
            'title'     => 'How To Order Page | Oke Frozen Food'
        ];
        return view('pesan', $data);
	}
}
