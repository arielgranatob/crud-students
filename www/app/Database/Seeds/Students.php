<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Students extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Ariel Granato',
            'address'    => 'Rua dos Bobos, 0',
            'path' => 'http://arielgranato.com.br/img/ariel-granato.jpg',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO students (name, address, path) VALUES(:name:, :address:, :path:)', $data);

        // Using Query Builder
        $this->db->table('students')->insert($data);
    }
}
