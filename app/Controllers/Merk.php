<?php

namespace App\Controllers;

use App\Models\MerkModel;
use CodeIgniter\RESTful\ResourceController;

class Merk extends ResourceController
{
    function __construct()
    {
        $this->merk = new MerkModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['merk'] = $this->merk->findAll();
        return view('admin/merk/index', $data);
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
        return view('admin/merk/new');
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
            'nama_merk'        => [
                'rules'         => 'required|min_length[3]',
                'errors'        => [
                    'required'      => 'Nama Merk tidak boleh kosong',
                    'min_length'    => 'Nama Merk Minimal 3 karakter',
                ],
            ],
            'gambar_merk'       => [
                'rules'         => 'uploaded[gambar_merk]|max_size[gambar_merk,1024]|is_image[gambar_merk]|mime_in[gambar_merk,image/jpg,image/jpeg,image/png]',
                'errors'        => [
                    'uploaded'      => 'Pilih gambar merk terlebih dahulu',
                    'max_size'      => 'Gambar terlalu besar *(max 1mb)',
                    'is_image'      => 'Format file yang anda pilih salah',
                    'mime_in'       => 'Format file yang anda pilih salah',
                ],
            ],
        ]);
        if (!$validate) {
            return redirect()->back()->withInput();
        }

        // Ambil Gambar
        $fileMerk = $this->request->getFile('gambar_merk');

        // Jika tidak memiliki gambar merk
        // if ($fileMerk->getError() == 4) {
        //     $namaGambar = 'default.png';
        // } else {

        // }

        // Generate nama gambar random
        $namaGambar = $fileMerk->getRandomName();
        // Pindahkan file ke folder
        $fileMerk->move('assets/img/logo', $namaGambar);

        // $data = $this->request->getPost();
        $this->merk->insert([
            'nama_merk'   => $this->request->getPost('nama_merk'),
            'gambar_merk' => $namaGambar
        ]);
        return redirect()->to(site_url('merk'))->with('pesan', 'Data Berhasil Disimpan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $merk = $this->merk->find($id);
        if (is_object($merk)) {
            $data['merk'] = $merk;
            return view('admin/merk/edit', $data);
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
            'nama_merk'        => [
                'rules'         => 'required|min_length[3]',
                'errors'        => [
                    'required'      => 'Nama Merk tidak boleh kosong',
                    'min_length'    => 'Nama Merk Minimal 3 karakter',
                ],
            ],
            'gambar_merk'       => [
                'rules'         => 'max_size[gambar_merk,1024]|is_image[gambar_merk]|mime_in[gambar_merk,image/jpg,image/jpeg,image/png]',
                'errors'        => [
                    'max_size'      => 'Gambar terlalu besar *(max 1mb)',
                    'is_image'      => 'Format file yang anda pilih salah',
                    'mime_in'       => 'Format file yang anda pilih salah',
                ],
            ],
        ]);
        if (!$validate) {
            return redirect()->back()->withInput();
        }

        $fileGambar = $this->request->getFile('gambar_merk');
        // Cek Gambar
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getPost('gambar_lama');
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('assets/img/logo/', $namaGambar);
            unlink('assets/img/logo/' . $this->request->getPost('gambar_lama'));
        }

        $data = [
            'nama_merk'   => $this->request->getPost('nama_merk'),
            'gambar_merk' => $namaGambar
        ];
        $this->merk->update($id, $data);
        return redirect()->to(site_url('merk'))->with('pesan', 'Data Berhasil Diperbarui');
    }


    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        // Hapus Sementara
        $this->merk->where('id_merk', $id)->delete();
        return redirect()->to(site_url('merk'))->with('pesan', 'Data Berhasil Dihapus');
    }

    public function trash()
    {
        // Menampilkan data yang dihapus sementara
        $data['merk'] = $this->merk->onlyDeleted()->findAll();
        return view('admin/merk/trash', $data);
    }

    public function restore($id = null)
    {
        $this->db = \Config\Database::connect();
        if ($id != null) { // Restore 1 data
            $this->db->table('merk')
                ->set('deleted_at', null, true)
                ->where(['id_merk' => $id])
                ->update();
        } else { // restore all data
            $this->db->table('merk')
                ->set('deleted_at', null, true)
                ->where('deleted_at is NOT NULL', null, false)
                ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('merk'))->with('pesan', 'Data Berhasil Dipulihkan');
        }
    }

    public function hapus($id = null)
    {
        if ($id != null) { //hapus permanen 1 data
            $img = $this->merk->onlyDeleted()->find($id);
            unlink('assets/img/logo/' . $img->gambar_merk);
            $this->merk->delete($id, true);
            return redirect()->to(site_url('merk/trash'))->with('pesan', 'Data Merk Berhasil Dihapus Permanen');
        } else { // hapus permanen all data
            $img = $this->merk->onlyDeleted()->find($id);
            foreach ($img as $img) {
                unlink('assets/img/logo/' . $img->gambar_merk);
            }
            $this->merk->purgeDeleted();
            return redirect()->to(site_url('merk/trash'))->with('pesan', 'Data Merk Berhasil Dihapus Permanen');
        }
    }
}
