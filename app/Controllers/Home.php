<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['header'] = "Homepage | index";

        return view('welcome_message', $data);
    }
}
