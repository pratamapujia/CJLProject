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
    $data['countProduk'] = $this->BarangModel->count(0);
		$data['pagination'] = pagination('mesin', $data['countProduk'], $this->per_page);
		$data = [
			'title' => 'Katalog Mesin'
		];
    $data['kategori'] = 'Machinery';
		$data['katalog'] = $this->BarangModel->getProduk(0, $this->per_page, $this->start());
       return view('pages/mesin', $data);
    }

    public function machinetool()
    {
    $data['countProduk'] = $this->BarangModel->count(0);
		$data['pagination'] = pagination('machinetool', $data['countProduk'], $this->per_page);
		$data = [
			'title' => 'Katalog Machine Tool Accesories'
		];
    $data['kategori'] = 'Machine Tools';
		$data['katalog'] = $this->BarangModel->getProduk(0, $this->per_page, $this->start());
       return view('pages/machinetool', $data);
    }

    public function cuttingtool()
    {
    $data['countProduk'] = $this->BarangModel->count(0);
		$data['pagination'] = pagination('cuttingtool', $data['countProduk'], $this->per_page); 
		$data = [
			'title' => 'Katalog Cutting Tools'
		];
    $data['kategori'] = 'Cutting Tools';
		$data['katalog'] = $this->BarangModel->getProduk(0, $this->per_page, $this->start());
       return view('pages/cuttingtool', $data);
    }

    public function measuringtool()
    {
    $data['countProduk'] = $this->BarangModel->count(0);
		$data['pagination'] = pagination('measuringtool', $data['countProduk'], $this->per_page);
		$data = [
			'title' => 'Katalog Measuring Tool'
		];
    $data['kategori'] = 'Measuring Tools';
		$data['katalog'] = $this->BarangModel->getProduk(0, $this->per_page, $this->start());
       return view('pages/measuringtool', $data);
    }

    public function handtool()
    {
    $data['countProduk'] = $this->BarangModel->count(0);
		$data['pagination'] = pagination('handtool', $data['countProduk'], $this->per_page);
		$data = [
			'title' => 'Katalog Hand Tools'
		];
    $data['kategori'] = 'Hand Tools';
		$data['katalog'] = $this->BarangModel->getProduk(0, $this->per_page, $this->start());
       return view('pages/handtool', $data);
    }

    public function cuttingcoolant()
    {
    $data['countProduk'] = $this->BarangModel->count(0);
		$data['pagination'] = pagination('cuttingcoolant', $data['countProduk'], $this->per_page);
		$data = [
			'title' => 'Katalog Cutting Coolant'
		];
    $data['kategori'] = 'Cutting Coolant';
		$data['katalog'] = $this->BarangModel->getProduk(0, $this->per_page, $this->start());
       return view('pages/cuttingcoolant', $data);
    }

    public function abrasive()
    {
    $data['countProduk'] = $this->BarangModel->count(0);
		$data['pagination'] = pagination('abrasive', $data['countProduk'], $this->per_page);
		$data = [
			'title' => 'Katalog Abrasive'
		];
    $data['kategori'] = 'Abrasive';
		$data['katalog'] = $this->BarangModel->getProduk(0, $this->per_page, $this->start());
       return view('pages/abrasive', $data);
    }

    public function detail($id_barang)
	{
		$data['kategori'] = 'detail';
		$data['detail'] = $this->BarangModel->detailProduk($id_barang);
		$this->layout('/pages/detail', $data);
	}
}