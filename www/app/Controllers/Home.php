<?php

namespace App\Controllers;

use App\Controllers\Students as ControllersStudents;

class Home extends BaseController
{
    public function __construct()
    {
        $this->Students = new ControllersStudents();
    }

    public function index()
    {
        $data['students'] = $this->Students->getAll();
        return view('index', $data);
    }
}
