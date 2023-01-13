<?php

namespace App\Controllers;

use App\Models\MerkModel;
use App\Models\BarangModel;
use App\Models\KategoriModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Barang extends ResourceController
{
    function __construct()
    {
        $this->barang   = new BarangModel();
        $this->merk     = new MerkModel();
        $this->kategori = new KategoriModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['barang'] = $this->barang->getAll();
        return view('admin/barang/index', $data);
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
        $data['merk'] = $this->merk->findAll();
        $data['kategori'] = $this->kategori->findAll();
        return view('admin/barang/new', $data);
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
            'nama_barang'        => [
                'rules'         => 'required|min_length[3]',
                'errors'        => [
                    'required'      => 'Nama barang tidak boleh kosong',
                    'min_length'    => 'Nama barang Minimal 3 karakter',
                ],
            ],
            'gambar_barang'       => [
                'rules'         => 'uploaded[gambar_barang]|max_size[gambar_barang,1024]|is_image[gambar_barang]|mime_in[gambar_barang,image/jpg,image/jpeg,image/png]',
                'errors'        => [
                    'uploaded'      => 'Pilih gambar barang terlebih dahulu',
                    'max_size'      => 'Gambar terlalu besar *(max 1mb)',
                    'is_image'      => 'Format file yang anda pilih salah',
                    'mime_in'       => 'Format file yang anda pilih salah',
                ],
            ],
            'id_merk'        => [
                'rules'         => 'required',
                'errors'        => [
                    'required'      => 'Merek tidak boleh kosong',
                ],
            ],
            'id_kategori'        => [
                'rules'         => 'required',
                'errors'        => [
                    'required'      => 'Kategori tidak boleh kosong',
                ],
            ],
        ]);
        if (!$validate) {
            return redirect()->back()->withInput();
        }

        // Ambil Gambar
        $fileBarang = $this->request->getFile('gambar_barang');

        // Jika tidak memiliki gambar barang
        if ($fileBarang->getError() == 4) {
            $namaGambar = 'default.png';
        } else {

            // Generate nama gambar random
            $namaGambar = $fileBarang->getRandomName();
        }

        // Pindahkan file ke folder
        $fileBarang->move('assets/img/barang', $namaGambar);

        // $data = $this->request->getPost();
        $this->barang->insert([
            'nama_barang'   => $this->request->getPost('nama_barang'),
            'id_merk'   => $this->request->getPost('id_merk'),
            'id_kategori'   => $this->request->getPost('id_kategori'),
            'desk_barang'   => $this->request->getPost('desk_barang'),
            'gambar_barang' => $namaGambar,
        ]);
        return redirect()->to(site_url('barang'))->with('pesan', 'Data Berhasil Disimpan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $barang = $this->barang->find($id);
        if (is_object($barang)) {
            $data['barang'] = $barang;
            $data['merk'] = $this->merk->findAll();
            $data['kategori'] = $this->kategori->findAll();
            return view('admin/barang/edit', $data);
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
            'nama_barang'        => [
                'rules'         => 'required|min_length[3]',
                'errors'        => [
                    'required'      => 'Nama barang tidak boleh kosong',
                    'min_length'    => 'Nama barang Minimal 3 karakter',
                ],
            ],
            'gambar_barang'       => [
                'rules'         => 'max_size[gambar_barang,1024]|is_image[gambar_barang]|mime_in[gambar_barang,image/jpg,image/jpeg,image/png]',
                'errors'        => [
                    'max_size'      => 'Gambar terlalu besar *(max 1mb)',
                    'is_image'      => 'Format file yang anda pilih salah',
                    'mime_in'       => 'Format file yang anda pilih salah',
                ],
            ],
            'id_merk'        => [
                'rules'         => 'required',
                'errors'        => [
                    'required'      => 'Merek tidak boleh kosong',
                ],
            ],
            'id_kategori'        => [
                'rules'         => 'required',
                'errors'        => [
                    'required'      => 'Kategori tidak boleh kosong',
                ],
            ],
        ]);
        if (!$validate) {
            return redirect()->back()->withInput();
        }
        $fileGambar = $this->request->getFile('gambar_barang');
        // Cek Gambar
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getPost('gambar_lama');
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('assets/img/barang/', $namaGambar);
            unlink('assets/img/barang/' . $this->request->getPost('gambar_lama'));
        }

        $data = [
            'nama_barang'   => $this->request->getPost('nama_barang'),
            'id_merk'       => $this->request->getPost('id_merk'),
            'id_kategori'   => $this->request->getPost('id_kategori'),
            'desk_barang'   => $this->request->getPost('desk_barang'),
            'gambar_barang' => $namaGambar,
        ];
        $this->barang->update($id, $data);
        return redirect()->to(site_url('barang'))->with('pesan', 'Data Berhasil Diupdate');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        // Hapus Sementara
        $this->barang->where('id_barang', $id)->delete();
        return redirect()->to(site_url('barang'))->with('pesan', 'Data Berhasil Dihapus');

        // $img = $this->barang->find($id);
        // unlink('assets/img/barang/' . $img->gambar_barang);
        // // Hapus Permanen
        // $this->barang->delete($id);
        // return redirect()->to(site_url('barang'))->with('pesan', 'Data Berhasil Dihapus');
    }

    public function trash()
    {
        // Menampilkan data yang dihapus sementara
        $data['barang'] = $this->barang->getTrash();
        return view('admin/barang/trash', $data);
    }

    public function restore($id = null)
    {
        $this->db = \Config\Database::connect();
        if ($id != null) {
            $this->db->table('barang')
                ->set('deleted_at', null, true)
                ->where(['id_barang' => $id])
                ->update();
        } else {
            $this->db->table('barang')
                ->set('deleted_at', null, true)
                ->where('deleted_at is NOT NULL', null, false)
                ->update();
        }

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('barang'))->with('pesan', 'Data Berhasil Dipulihkan');
        }
    }
}
