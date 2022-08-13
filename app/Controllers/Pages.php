<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
		$data = [
			'title' => 'CIPTA JAYA LESTARI'
		];

       return view('pages/home', $data);
    }

    public function about()
    {
		$data = [
			'title' => 'Tentang Kami'
		];

       return view('pages/about', $data);
    }

    public function promo()
    {
		$data = [
			'title' => 'Promo Bulan Ini'
		];

       return view('pages/promo', $data);
    }

    public function newproducts()
    {
		$data = [
			'title' => 'Promo Bulan Ini'
		];

       return view('pages/newproducts', $data);
    }

    public function mesin()
    {
		$data = [
			'title' => 'Katalog Mesin'
		];

       return view('pages/mesin', $data);
    }

    public function machinetool()
    {
		$data = [
			'title' => 'Katalog Machine Tool Accesories'
		];

       return view('pages/machinetool', $data);
    }

    public function cuttingtool()
    {
		$data = [
			'title' => 'Katalog Cutting Tool'
		];

       return view('pages/cuttingtool', $data);
    }

    public function measuringtool()
    {
		$data = [
			'title' => 'Katalog Measuring Tool'
		];

       return view('pages/measuringtool', $data);
    }

    public function handtool()
    {
		$data = [
			'title' => 'Katalog Hand Tool'
		];

       return view('pages/handtool', $data);
    }

    public function cuttingcoolant()
    {
		$data = [
			'title' => 'Katalog Cutting Coolant'
		];

       return view('pages/cuttingcoolant', $data);
    }

    public function abrasive()
    {
		$data = [
			'title' => 'Katalog Abrasive'
		];

       return view('pages/abrasive', $data);
    }
}