<?php

namespace App\Controllers;

class HomeAdmin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
}
