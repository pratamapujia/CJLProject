<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
  public function __construct()
  {
    $this->users = new UsersModel();
  }

  public function index()
  {
    return redirect()->to(site_url('login'));
  }

  public function login()
  {
    if (session('id_admin')) {
      return redirect()->to(site_url('/admin'));
    }
    return view('auth/login');
  }

  public function loginProcess()
  {
    $post = $this->request->getPost();
    $query = $this->db->table('users')->getWhere(['email' => $post['email']]);
    $users = $query->getRow();
    if ($users) {
      if (password_verify($post['password'], $users->password)) {
        $param = ['id_admin' => $users->id_admin];
        session()->set($param);
        return redirect()->to(site_url('/admin'));
      } else {
        return redirect()->back()->with('error', 'Password tidak sesuai');
      }
    } else {
      return redirect()->back()->with('error', 'Email tidak ditemukan');
    }
  }

  public function logout()
  {
    session()->remove('id_admin');
    return redirect()->to(site_url('home'));
  }
}
