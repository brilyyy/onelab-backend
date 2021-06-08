<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExaminationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exams = [
            [1, 'Gula Darah', 'mg/dL', '<140', ''],
            [1, 'Cholesterol Total', 'mg/dL', '150-200', ''],
            [1, 'Cholesterol HDL (High Density Lipoprotein)', 'mg/dL', '45-65(P) 35-55(L)', ''],
            [1, 'Cholesterol LDL (Low Density Lipoprotein)', 'mg/dL', '<130', ''],
            [1, 'Trigliserida', 'mg/dL', '120-190', ''],
            [1, 'Ureum', 'mg/dL', '5-17', ''],
            [1, 'Creatinin', 'U/L', '60-150(P) 70-160(L)', ''],
            [1, 'SGPT (Serum Glutamic Pyruvic Transaminase)', 'U/L', '<20(P) <30(L)', ''],
            [1, 'SGOT (Serum Glutamic Oxaloacetic Transaminase)', 'U/L', '<21(P) <25(L)', ''],
            [2, 'Darah Rutin (Hemoglobin)', 'g/dL', '12,0-14,0(P) 13,0-16,0(L)', ''],
            [2, 'Darah Rutin (Eritrosit)', 'Juta sel/μL darah', '4,0-5,0(P) 4,5-5,5(L)', ''],
            [2, 'Darah Rutin (Leukosit)', '10³/μL', '5,0-10,0', ''],
            [2, 'Darah Rutin (Trombosit)', '10³/μL', '150-400', ''],
            [2, 'Darah Rutin (Hematokrit)', '%', '40-50(P) 45-55(L)', ''],
            [2, 'Darah Rutin (MCV)', 'fL', '86-110', ''],
            [2, 'Darah Rutin (MCH)', 'Pg', '27-32', ''],
            [2, 'Darah Rutin (MCHC)', 'g/dL', '31-35', ''],
            [2, 'Haemoglobin', 'g/dL', '12,0-14,0(P) 13,0-16,0(L)', ''],
            [2, 'Angka Leukosit', '10³/μL', '5,0-10,0', ''],
            [2, 'Angka Trombosit', '10³/μL', '150-400', ''],
            [2, 'Eosinofil', '%', '0-3', ''],
            [2, 'Basofil', '%', '0-2', ''],
            [2, 'Stab', '%', '2-4', ''],
            [2, 'Segmen', '%', '35-80', ''],
            [2, 'Limfosit', '%', '15-40', ''],
            [2, 'Monosit', '%', '1-10', ''],
            [2, 'Hematokrit', '%', '40-50(P) 45-55(L)', ''],
            [2, 'Laju Endap Darah', 'mm/Jam', '0-20(P) 0-15(L)', ''],
            [2, 'Clotting Time', 'detik', '8-18', ''],
            [2, 'Bleeding Time', 'detik', '1-3', ''],
            [2, 'Angka Eritrosit', 'Jutasel/μL darah', '4,0-5,0(P) 4,5-5,5(L)', ''],
            [2, 'Golongan Darah', '', '', ''],
            [2, 'Rhesus', '', '', ''],
            [2, 'Retikulosit', '%', '0,5-20', ''],
            [3, 'Urin Rutin (Volume)', 'mL/24 jam', '1000-1800', ''],
            [3, 'Urin Rutin (Warna)', '', 'Kuning', ''],
            [3, 'Urin Rutin (Kekeruhan)', '', 'Jernih atau sedikit keruh', ''],
            [3, 'Urin Rutin (pH)', '', '4,5-8', ''],
            [3, 'Urin Rutin (BJ)', '', '1003-1030', ''],
            [3, 'Urin Rutin (Protein)', 'mg/dL', '≤150', ''],
            [3, 'Urin Rutin (Bilirubin)', '', 'Negative', ''],
            [3, 'Urin Rutin (Urobilinogen)', 'mg/dL', '0,5-1', ''],
            [3, 'Urin Rutin (Benda Keton)', '', 'Negative', ''],
            [3, 'Urin Rutin (Nitrit)', '', 'Negative', ''],
            [3, 'Urin Rutin (Glukosaurin)', 'mg/dL', '≤130', ''],
            [3, 'Eritrosit', '/LPB', '≤2', ''],
            [3, 'Leukosit', '/LPB', '≤5', ''],
            [3, 'Epitel', '/LPB', '≤15', ''],
            [3, 'Silinder', '/LPK', '0-5', ''],
            [3, 'Kristal', '', 'Negative', ''],
            [3, 'Mikrobiologi', '', 'Negative', ''],
            [3, 'Reduksi Glukosa', '', 'Negative', ''],
            [3, 'Protein', 'mg/dL', '≤150', ''],
            [3, 'Sedimen', '', 'Negative', ''],
            [3, 'Tes Kehamilan', '', 'Positive', ''],
            [4, 'Widal', '', 'Negative', ''],
            [4, 'HIV', '', 'Negative', ''],
            [4, 'Gonorhoea', '', 'Negative', ''],
            [4, 'Rapid Plasma Regen', '', 'Negative', ''],
            [4, 'TPHA', '', 'Negative', ''],
            [4, 'NAPZA', '', 'Negative', ''],
            [4, 'HbsAg', '', 'Negative', ''],
            [4, 'Anti HbsAg', '', 'Negative', ''],
            [4, 'Feses Rutin', '', 'Negative', ''],
        ];

        foreach ($exams as $exam) {
            DB::table('examinations')->insert([
                'test_id' => $exam[0],
                'nama' => $exam[1],
                'satuan' => $exam[2],
                'nilai_rujukan' => $exam[3],
                'harga' => $exam[4],
            ]);
        }
    }
}
