<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $samples = [
            'Whole Blood',
            'Serum Darah',
            'Plasma Darah',
            'Urine',
            'Feses'
        ];

        foreach ($samples as $sample) {
            DB::table('samples')->insert([
                'jenis_spesimen' => $sample
            ]);
        }
    }
}
