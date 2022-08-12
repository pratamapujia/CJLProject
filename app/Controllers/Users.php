<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends ResourceController
{

    function __construct()
    {
        $this->users = new UsersModel();
    }
    

    public function index()
    {
        $data['users'] = $this->users->findAll();
        return view('admin/user/index', $data);
    }

   
    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        return view('admin/user/new');
    }

    
    public function create()
    {
        // Validasi
        $validate = $this->validate([
            'nama_admin'        => [
                'rules'         => 'required|min_length[3]',
                'errors'        => [
                    'required'      => 'Nama Lengkap tidak boleh kosong',
                    'min_length'    => 'Nama Lengkap Minimal 3 karakter',
                ],
            ],
            'email'       => [
                'rules'         => 'required|min_length[6]',
                'errors'        => [
                    'required'      => 'E-mail tidak boleh kosong',
                    'min_length'    => 'E-mail Minimal 6 karakter',
                ],
            ],
            'username'      => [
                'rules'         => 'required',
                'errors'        => [
                    'required'      => 'Username tidak boleh kosong',
                ],
            ],
            'password'   => [
                'rules'         => 'required|min_length[5]',
                'errors'        => [
                    'required'      => 'Password tidak boleh kosong',
                    'min_length'    => 'Nama Lengkap Minimal 3 karakter',
                ],
            ],
        ]);
        if (!$validate) {
            return redirect()->back()->withInput();
        }

        $data = $this->request->getPost();
        $this->users->insert($data);
        return redirect()->to(site_url('users'))->with('pesan', 'Data Berhasil Disimpan');
        
    }

    
    public function edit($id = null)
    {
        $users = $this->users->find($id);
        if (is_object($users)) {
            $data['users'] = $users;
            return view('admin/user/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    
    public function update($id = null)
    {
        // Validasi
        $validate = $this->validate([
            'nama_admin'        => [
                'rules'         => 'required|min_length[3]',
                'errors'        => [
                    'required'      => 'Nama Lengkap tidak boleh kosong',
                    'min_length'    => 'Nama Lengkap Minimal 3 karakter',
                ],
            ],
            'email'       => [
                'rules'         => 'required|min_length[6]',
                'errors'        => [
                    'required'      => 'E-mail tidak boleh kosong',
                    'min_length'    => 'E-mail Minimal 6 karakter',
                ],
            ],
            'username'      => [
                'rules'         => 'required',
                'errors'        => [
                    'required'      => 'Username tidak boleh kosong',
                ],
            ],
            'password'   => [
                'rules'         => 'required|min_length[5]',
                'errors'        => [
                    'required'      => 'Password tidak boleh kosong',
                    'min_length'    => 'Nama Lengkap Minimal 3 karakter',
                ],
            ],
        ]);
        if (!$validate) {
            return redirect()->back()->withInput();
        }

        // Update data
        $data = $this->request->getPost();
        $this->users->update($id, $data);
        return redirect()->to(site_url('users'))->with('pesan', 'Data Berhasil Diperbarui');
    }


    
    public function delete($id = null)
    {
        // Hapus Sementara
        $this->users->where('id_admin', $id)->delete();
        return redirect()->to(site_url('users'))->with('pesan', 'Data Berhasil Dihapus');
    }
    public function trash()
    {
        // Menampilkan data yang dihapus sementara
        $data['users'] = $this->users->onlyDeleted()->findAll();
        return view('admin/user/trash', $data);
    }
    public function restore($id = null)
    {
        $this->db = \Config\Database::connect();
        if ($id != null) { // Restore 1 data
            $this->db->table('users')
                ->set('deleted_at', null, true)
                ->where(['id_admin' => $id])
                ->update();
        } else { // restore all data
            $this->db->table('users')
                ->set('deleted_at', null, true)
                ->where('deleted_at is NOT NULL', null, false)
                ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('users'))->with('pesan', 'Data Berhasil Dipulihkan');
        }
    }

    public function hapus($id = null)
    {
        if ($id != null) { //hapus permanen 1 data
            $this->users->delete($id, true);
            return redirect()->to(site_url('users/trash'))->with('pesan', 'Data Trash Berhasil Dihapus Permanen');
        } else { // hapus permanen all data
            $this->users->purgeDeleted();
            return redirect()->to(site_url('users/trash'))->with('pesan', 'Data Trash Berhasil Dihapus Permanen');
        }
    }
}
