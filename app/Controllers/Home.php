<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriModel;
use App\Models\MerkModel;

class Home extends BaseController
{
  function __construct()
  {
    $this->merk     = new MerkModel();
    $this->kategori = new KategoriModel();
    $this->barang   = new BarangModel();
  }

  public function index()
  {
    $data['merk'] = $this->merk->findAll();

    return view('home', $data);
  }

  public function about()
  {
    if ($this->request->getMethod() == 'post') {
      $username = $this->request->getVar('name');
      $from = $this->request->getVar('email');
      $subject = $this->request->getVar('subject');
      $message = $this->request->getVar('message');

      $email = service('email');
      $email->setFrom($from, $username);
      $email->setTo('pujiistiani123@gmail.com');
      $email->setSubject($subject);
      $email->setMessage($message);

      if ($email->send()) {
        return redirect()->to(site_url('abouts'))->with('pesan', 'Pesan Feedback Berhasil Dikirim');
      } else {
        $data = $email->printDebugger(['headers']);
        print_r($data);
      }
    }
    return view('about');
  }

  public function promo()
  {
    return view('promo');
  }

  public function newproduct()
  {
    return view('newproducts');
  }

  public function machinery()
  {
    $data = $this->barang->getPageMachinery(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/machinery', $data);
  }

  public function machinetool()
  {
    $data = $this->barang->getPagemachinetool(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/machinetool', $data);
  }

  public function cuttingtool()
  {
    $data = $this->barang->getPagecuttingtool(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/cuttingtool', $data);
  }

  public function measuringtool()
  {
    $data = $this->barang->getPagemeasuringtool(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/measuringtool', $data);
  }

  public function handtool()
  {
    $data = $this->barang->getPagehandtool(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/handtool', $data);
  }

  public function cuttingcoolant()
  {
    $data = $this->barang->getPagecuttingcoolant(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/cuttingcoolant', $data);
  }

  public function abrasive()
  {
    $data = $this->barang->getPageabrasive(8);
    // $data['pager'] = $this->barang->pager;
    // dd($data);

    return view('katalog/abrasive', $data);
  }

  public function detail($id = null)
  {
    $barang = $this->barang->find($id);
    if (is_object($barang)) {
      $data['barang'] = $barang;
      $data['merk'] = $this->merk->findAll();
      $data['kategori'] = $this->kategori->findAll();
      // dd($data);
      return view('katalog/detail', $data);
    } else {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
  }

  public function halamanUtama()
  {
    $data = [
      'title' => 'CIPTA JAYA LESTARI'
    ];

    return view('pages/home', $data);
  }
}
