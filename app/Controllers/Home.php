<?php

namespace App\Controllers;

use App\Models\RizwanModel;
use App\Models\EduModel;


class Home extends BaseController
{
    public function index()
    {
        $riz = new RizwanModel();
        $edu = new EduModel();
        $data=[
            'title' => 'Rizwan CV',
            'riz'=> $riz->findAll()[0],
            'edu'=> $edu->findAll(),
        ];
        return view('home',$data);
    }
}
