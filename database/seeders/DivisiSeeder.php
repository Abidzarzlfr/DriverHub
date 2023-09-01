<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisi= [
            ['nama_divisi' => 'Manager'],
            ['nama_divisi' => 'IT'],
            ['nama_divisi' => 'Operasional']
        ];

        foreach ($divisi as $d) {
            DB::table('divisi')->insert([
                'nama_divisi' => $d['nama_divisi'],
                'created_at' => date('2023-08-10'),
                'updated_at' => date('2023-08-10')
            ]);
        }
    }
}
