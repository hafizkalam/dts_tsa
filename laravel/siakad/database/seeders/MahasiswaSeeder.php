<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nim' => '1941720101',
                'nama' => 'Hafiz Kalam',
                'kelas_id' => '1',
                'jurusan' => 'Informatika',
                'no_hp' => '081336273485'
            ], [
                'nim' => '1941725654',
                'nama' => 'Budi Anto',
                'kelas_id' => '2',
                'jurusan' => 'Informatika',
                'no_hp' => '08123456789'
            ], [
                'nim' => '19417213651',
                'nama' => 'Suep',
                'kelas_id' => '3',
                'jurusan' => 'Informatika',
                'no_hp' => '081788475001'
            ]
        ];
        DB::table('mahasiswa')->insert($data);
    }
}
