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
            ['nama_divisi' => 'Direksi'],
            ['nama_divisi' => 'Direktur Utama'],
            ['nama_divisi' => 'Direktur'],
            ['nama_divisi' => 'Direktur Keuangan'],
            ['nama_divisi' => 'Direktur HRD'],
            ['nama_divisi' => 'Manager'],
            ['nama_divisi' => 'Manager HRD'],
            ['nama_divisi' => 'Manager Pemasaran'],
            ['nama_divisi' => 'IT'],
            ['nama_divisi' => 'Produksi'],
            ['nama_divisi' => 'Driver'],
            ['nama_divisi' => 'Operasional'],
            ['nama_divisi' => 'Pemasaran'],
            ['nama_divisi' => 'Umum']
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
