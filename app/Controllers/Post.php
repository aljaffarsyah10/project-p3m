<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;
use App\Models\PenelitianModel;

// class Post extends Controller
class Post extends BaseController
{
    /**
     * index function
     */
    public function index()
    {
        //model initialize
        $postModel = new PenelitianModel();

        //pager initialize
        $pager = \Config\Services::pager();

        $data = array(
            // 'posts' => $postModel->paginate(2, 'post'),
            'penelitian' => $postModel->paginate(500),
            // 'pager' => $postModel->pager
        );
        $data['header'] = "Tabel Data Penelitian";

        return view('penelitian/test_read_penelitian', $data);
    }

    /**
     * create function
     */
    public function create()
    {
        return view('penelitian/form_penelitian');
    }

    /**
     * store function
     */
    public function store()
    {
        //load helper form and URL
        helper(['form', 'url']);

        //define validation
        $validation = $this->validate([
            'judul_penelitian' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Penelitian.'
                ]
            ],
            'nama_peneliti'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Peneliti.'
                ]
            ],
            'jabatan'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Jabatan Peneliti.'
                ]
            ],
            'no_hp'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nomor HP Peneliti.'
                ]
            ],
            'email'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Email Peneliti.'
                ]
            ],
        ]);

        if (!$validation) {

            //render view with error validation message
            return view('penelitian/form_penelitian', [
                'validation' => $this->validator
            ]);
        } else {

            //model initialize
            $postModel = new PenelitianModel();

            //insert data into database
            $postModel->insert([
                // 'title'   => $this->request->getPost('title'),
                // 'content' => $this->request->getPost('content'),
                'judul_penelitian'   => $this->request->getPost('judul_penelitian'),
                'nama_peneliti'   => $this->request->getPost('nama_peneliti'),
                'jabatan'   => $this->request->getPost('jabatan'),
                'no_hp'   => $this->request->getPost('no_hp'),
                'email'   => $this->request->getPost('email'),

            ]);

            //flash message
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('tesread_penelitian'));
        }
    }
}
