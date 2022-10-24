<?php

namespace App\Controllers;

class Penelitian extends BaseController
{
    public function jenis()
    {
        $data['header'] = "Jenis Penelitian";
        echo view('jenis_penelitian', $data);
    }

    public function form_penelitian1()
    {
        $data['header'] = "Form Penelitian Mandiri";
        echo view('penelitian/form_penelitian', $data);
    }

    public function form_penelitian2()
    {
        $data['header'] = "Form Penelitian Semi Mandiri";
        echo view('penelitian/form_penelitian', $data);
    }

    public function form_penelitian3()
    {
        $data['header'] = "Form Penelitian Didanai Institusi";
        echo view('penelitian/form_penelitian', $data);
    }

    public function form_penelitian4()
    {
        $data['header'] = "Form Penelitian Institusi";
        echo view('penelitian/form_penelitian', $data);
    }

    public function form_penelitian5()
    {
        $data['header'] = "Form Penelitian Kerja Sama";
        echo view('penelitian/form_penelitian', $data);
    }
}
