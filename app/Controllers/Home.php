<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
		$data = [
			'title' => 'CIPTA JAYA LESTARI'
		];

       return view('pages/home', $data);
    }
}
