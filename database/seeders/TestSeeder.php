<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tests = [
            'Kimia Darah',
            'Hematologi',
            'Urinologi',
            'Lain-Lain'
        ];
        foreach ($tests as $test) {
            DB::table('tests')->insert([
                'nama' => $test,
            ]);
        }
    }
}
