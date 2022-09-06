<?php

namespace App\Controllers;

use App\Models\SalesModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Sales extends ResourceController
{

    function __construct()
    {
        $this->sales = new SalesModel();
    }
    // protected $mdoelName = 'App\Models\SalesModel';

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['sales'] = $this->sales->findAll();
        return view('admin/sales/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('admin/sales/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        // Validasi
        $validate = $this->validate([
            'nama_sales'        => [
                'rules'         => 'required|min_length[3]',
                'errors'        => [
                    'required'      => 'Nama Lengkap tidak boleh kosong',
                    'min_length'    => 'Nama Lengkap Minimal 3 karakter',
                ],
            ],
            'phone_sales'       => [
                'rules'         => 'required|min_length[10]|numeric',
                'errors'        => [
                    'required'      => 'No Telephone tidak boleh kosong',
                    'min_length'    => 'No Telephone Minimal 10 karakter',
                    'numeric'       => 'Field hanya boleh angka',
                ],
            ],
            'alamat_sales'      => [
                'rules'         => 'required',
                'errors'        => [
                    'required'      => 'Alamat tidak boleh kosong',
                ],
            ],
            'tgl_lahir_sales'   => [
                'rules'         => 'required',
                'errors'        => [
                    'required'      => 'Tanggal lahir tidak boleh kosong',
                ],
            ],
        ]);
        if (!$validate) {
            return redirect()->back()->withInput();
        }

        $data = $this->request->getPost();
        $this->sales->insert($data);
        return redirect()->to(site_url('sales'))->with('pesan', 'Data Berhasil Disimpan');
        // $save = $this->sales->insert($data);
        // if (!$save) {
        //     return redirect()->back()->withInput()->with('errors', $this->sales->errors());
        // } else {
        //     return redirect()->to(site_url('sales'))->with('pesan', 'Data Berhasil Disimpan');
        // }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $sales = $this->sales->find($id);
        if (is_object($sales)) {
            $data['sales'] = $sales;
            return view('admin/sales/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        // Validasi
        $validate = $this->validate([
            'nama_sales'        => [
                'rules'         => 'required|min_length[3]',
                'errors'        => [
                    'required'      => 'Nama Lengkap tidak boleh kosong',
                    'min_length'    => 'Nama Lengkap Minimal 3 karakter',
                ],
            ],
            'phone_sales'       => [
                'rules'         => 'required|min_length[10]|numeric',
                'errors'        => [
                    'required'      => 'No Telephone tidak boleh kosong',
                    'min_length'    => 'No Telephone Minimal 10 karakter',
                    'numeric'       => 'Field hanya boleh angka',
                ],
            ],
            'alamat_sales'      => [
                'rules'         => 'required',
                'errors'        => [
                    'required'      => 'Alamat tidak boleh kosong',
                ],
            ],
            'tgl_lahir_sales'   => [
                'rules'         => 'required',
                'errors'        => [
                    'required'      => 'Tanggal lahir tidak boleh kosong',
                ],
            ],
        ]);
        if (!$validate) {
            return redirect()->back()->withInput();
        }

        // Update data
        $data = $this->request->getPost();
        $this->sales->update($id, $data);
        return redirect()->to(site_url('sales'))->with('pesan', 'Data Berhasil Diperbarui');
    }


    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        // Hapus Sementara
        $this->sales->where('id_sales', $id)->delete();
        return redirect()->to(site_url('sales'))->with('pesan', 'Data Berhasil Dihapus');
    }
    public function trash()
    {
        // Menampilkan data yang dihapus sementara
        $data['sales'] = $this->sales->onlyDeleted()->findAll();
        return view('admin/sales/trash', $data);
    }
    public function restore($id = null)
    {
        $this->db = \Config\Database::connect();
        if ($id != null) { // Restore 1 data
            $this->db->table('sales')
                ->set('deleted_at', null, true)
                ->where(['id_sales' => $id])
                ->update();
        } else { // restore all data
            $this->db->table('sales')
                ->set('deleted_at', null, true)
                ->where('deleted_at is NOT NULL', null, false)
                ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('sales'))->with('pesan', 'Data Berhasil Dipulihkan');
        }
    }

    public function hapus($id = null)
    {
        if ($id != null) { //hapus permanen 1 data
            $this->sales->delete($id, true);
            return redirect()->to(site_url('sales/trash'))->with('pesan', 'Data Trash Berhasil Dihapus Permanen');
        } else { // hapus permanen all data
            $this->sales->purgeDeleted();
            return redirect()->to(site_url('sales/trash'))->with('pesan', 'Data Trash Berhasil Dihapus Permanen');
        }
    }
}
