<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kota_kota= [
            ['nama_kota' => 'Kota Bandung'],
            ['nama_kota' => 'Kabupaten Bandung'],
            ['nama_kota' => 'Kabupaten Bandung Barat'],
            ['nama_kota' => 'Kota Cimahi'],
            ['nama_kota' => 'Samarinda'],
            ['nama_kota' => 'Yogyakarta'],
            ['nama_kota' => 'Solo'],
            ['nama_kota' => 'Garut'],
            ['nama_kota' => 'Tasikmalaya'],
            ['nama_kota' => 'Surabaya'],
            ['nama_kota' => 'Jakarta'],
            ['nama_kota' => 'Malang'],
            ['nama_kota' => 'Semarang'],
            ['nama_kota' => 'Denpasar'],
            ['nama_kota' => 'Turen'] 
        ];

        foreach ($kota_kota as $kota) {
            DB::table('kota')->insert([
                'nama_kota' => $kota['nama_kota'],
                'created_at' => date('2023-08-10'),
                'updated_at' => date('2023-08-10')
            ]);
        }
    }
}
