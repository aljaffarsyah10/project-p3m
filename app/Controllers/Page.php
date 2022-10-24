<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        $data['header'] = "about";
        echo view('about', $data);
    }

    public function contact()
    {
        $data['name'] = "Okta Gilang Al Jaffarsyah";
        $data['header'] = "Contact";
        echo view("contact", $data);
    }

    public function faqs()
    {
        // membuat data untuk dikirim ke view
        $data['data_faqs'] = [
            [
                'question' => 'Apa itu Codeigniter?',
                'answer' => 'Codeigniter adalah framework untuk membuat web'
            ],
            [
                'question' => 'Siapa yang membuat Codeiginter?',
                'answer' => 'CI awalnya dibuat oleh Ellislab'
            ],
            [
                'question' => 'Codeigniter versi berapakah yang digunakan pada tutoril ini?',
                'answer' => 'Codeigniter versi 4.0.4'
            ]
        ];
        $data['header'] = "FAQS";

        // load view dengan data
        echo view("faqs", $data);
    }

    public function tos()
    {
        echo "Halaman Term of Service";
    }

    public function profile()
    {
        $data['header'] = "Profile";
        echo view("profile", $data);
    }

    public function anggaran()
    {
        $data['header'] = "Anggaran";
        echo view("anggaran", $data);
    }

    public function penelitian()
    {
        $data['header'] = "Penelitian";
        echo view("penelitian", $data);
    }

    public function pkm()
    {
        $data['header'] = "Pengabdian Kepada Masyarakat";
        echo view("pkm", $data);
    }

    public function reimburse()
    {
        $data['header'] = "Reimburse";
        echo view("reimburse", $data);
    }
}
