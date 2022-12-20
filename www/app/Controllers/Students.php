<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlunoModel;
use CodeIgniter\Files\File;

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

    public function getById($id)
    {
        $query = $this->AlunoModel->select('*')
            ->where('id', $id)
            ->get()->getResultArray()[0];
        return $query;
    }

    public function updateStudent()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address')
        ];

        $input = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpeg]',
                'max_size[file,1024]',
            ]
        ]);

        if (!$input) {
            print_r('Arquivo inválido');
        } else {
            $img = $this->request->getFile('file');
            $img->move(ROOTPATH . 'public/images');
            $img = [
                'name' =>  $img->getName(),
            ];

            $data['path'] = 'images/' . $img['name'];
        }


        $this->AlunoModel->update($data['id'], $data);
        return redirect()->to('http://localhost/public');
    }

    public function deleteStudent($id)
    {
        if (is_numeric($id)) {
            $this->AlunoModel->delete($id);
        }
        return redirect()->to('http://localhost/public');
    }

    public function addStudent()
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address')
        ];

        $input = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpeg]',
                'max_size[file,1024]',
            ]
        ]);

        if (!$input) {
            print_r('Arquivo inválido');
        } else {
            $img = $this->request->getFile('file');
            $img->move(ROOTPATH . 'public/images');
            $img = [
                'name' =>  $img->getName(),
            ];

            $data['path'] = 'images/' . $img['name'];
        }

        $this->AlunoModel->insert($data);
        return redirect()->to('http://localhost/public');
    }
}
