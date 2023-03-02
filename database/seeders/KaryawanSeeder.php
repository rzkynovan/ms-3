<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karyawan::insert([
            [
                'nama' => 'Stefanus',
                'jabatan' => 'Staf IT'
            ],
            [
                'nama' => 'Clourentius',
                'jabatan' => 'Staf IT'
            ],
        ]);
    }
}
