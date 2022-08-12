<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use CodeIgniter\RESTful\ResourceController;

class Kategori extends ResourceController
{
    function __construct()
    {
        $this->kategori = new KategoriModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['kategori'] = $this->kategori->findAll();
        return view('admin/kategori/index', $data);
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
        return view('admin/kategori/new');
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
            'nama_kategori'        => [
                'rules'         => 'required|min_length[3]',
                'errors'        => [
                    'required'      => 'Nama Kategori tidak boleh kosong',
                    'min_length'    => 'Nama Kategori Minimal 3 karakter',
                ],
            ],
        ]);
        if (!$validate) {
            return redirect()->back()->withInput();
        }

        $data = $this->request->getPost();
        $this->kategori->insert($data);
        return redirect()->to(site_url('kategori'))->with('pesan', 'Data Berhasil Disimpan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $kategori = $this->kategori->find($id);
        if (is_object($kategori)) {
            $data['kategori'] = $kategori;
            return view('admin/kategori/edit', $data);
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
            'nama_kategori'        => [
                'rules'         => 'required|min_length[3]',
                'errors'        => [
                    'required'      => 'Nama Kategori tidak boleh kosong',
                    'min_length'    => 'Nama Kategori Minimal 3 karakter',
                ],
            ],
        ]);
        if (!$validate) {
            return redirect()->back()->withInput();
        }

        // Update data
        $data = $this->request->getPost();
        $this->kategori->update($id, $data);
        return redirect()->to(site_url('kategori'))->with('pesan', 'Data Berhasil Diperbarui');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->kategori->delete($id);
        return redirect()->to(site_url('kategori'))->with('pesan', 'Data Berhasil Dihapus');
    }
}
