<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlunoModel;


class Students extends BaseController
{
    public function __construct()
    {
        $this->AlunoModel = new AlunoModel();
    }

    public function getAll()
    {
        $query = $this->AlunoModel->get()->getResultArray();
        return $query;
    }
}
