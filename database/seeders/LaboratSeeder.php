<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaboratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laborats = [
            'Putri Hani Pratiwi',
            'Dewi Amalia',
            'Setyaningsih',
            'Ummu Anisatun Khinayah',
            'Fajar Timur Mardiko',
            'Emilia Dian Marantika',
            'Birra Pramudita Millega Devi',
            'Alifia Nisa Nugraheni'
        ];
        foreach ($laborats as $laborat) {
            DB::table('laborats')->insert([
                "nama" => $laborat
            ]);
        }
    }
}
