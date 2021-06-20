<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exams = [
            [1, 'Gula Darah', 'mg/dL', '<140', '43000'],
            [2, 'Cholesterol Total', 'mg/dL', '150-200', '64000'],
            [3, 'Cholesterol HDL (High Density Lipoprotein)', 'mg/dL', '45-65(P) 35-55(L)', '61000'],
            [4, 'Cholesterol LDL (Low Density Lipoprotein)', 'mg/dL', '<130', '96000'],
            [5, 'Trigliserida', 'mg/dL', '120-190', '51000'],
            [6, 'Ureum', 'mg/dL', '5-17', '40000'],
            [7, 'Creatinin', 'U/L', '60-150(P) 70-160(L)', '40000'],
            [8, 'SGPT (Serum Glutamic Pyruvic Transaminase)', 'U/L', '<20(P) <30(L)', '61000'],
            [9, 'SGOT (Serum Glutamic Oxaloacetic Transaminase)', 'U/L', '<21(P) <25(L)', '61000'],
            [10, 'Darah Rutin (Hemoglobin)', 'g/dL', '12,0-14,0(P) 13,0-16,0(L)', '66000'],
            [10, 'Darah Rutin (Eritrosit)', 'Juta sel/μL darah', '4,0-5,0(P) 4,5-5,5(L)', '66000'],
            [10, 'Darah Rutin (Leukosit)', '10³/μL', '5,0-10,0', '37000'],
            [10, 'Darah Rutin (Trombosit)', '10³/μL', '150-400', '33000'],
            [10, 'Darah Rutin (Hematokrit)', '%', '40-50(P) 45-55(L)', ''],
            [10, 'Darah Rutin (MCV)', 'fL', '86-110', '66000'],
            [10, 'Darah Rutin (MCH)', 'Pg', '27-32', '66000'],
            [10, 'Darah Rutin (MCHC)', 'g/dL', '31-35', '66000'],
            [11, 'Haemoglobin', 'g/dL', '12,0-14,0(P) 13,0-16,0(L)', '28000'],
            [12, 'Angka Leukosit', '10³/μL', '5,0-10,0', '37000'],
            [13, 'Angka Trombosit', '10³/μL', '150-400', '33000'],
            // [14, 'Jenis Leukosit', '%', '0-3', '37000'],

            [14, 'Eosinofil', '%', '0-3', '37000'],
            [14, 'Basofil', '%', '0-2', '37000'],
            [14, 'Stab', '%', '2-4', '37000'],
            [14, 'Segmen', '%', '35-80', ''],
            [14, 'Limfosit', '%', '15-40', ''],
            [14, 'Monosit', '%', '1-10', ''],

            [15, 'Hematokrit', '%', '40-50(P) 45-55(L)', ''],
            [16, 'Laju Endap Darah', 'mm/Jam', '0-20(P) 0-15(L)', ''],
            [17, 'Clotting Time', 'detik', '8-18', ''],
            [18, 'Bleeding Time', 'detik', '1-3', ''],
            [19, 'Angka Eritrosit', 'Jutasel/μL darah', '4,0-5,0(P) 4,5-5,5(L)', ''],
            [20, 'Golongan Darah', '', '', ''],
            [21, 'Rhesus', '', '', ''],
            [22, 'Retikulosit', '%', '0,5-20', ''],
            // [23, 'Urin Rutin', 'mL/24 jam', '1000-1800', '33000'],

            [23, 'Urin Rutin (Volume)', 'mL/24 jam', '1000-1800', ''],
            [23, 'Urin Rutin (Warna)', '', 'Kuning', ''],
            [23, 'Urin Rutin (Kekeruhan)', '', 'Jernih atau sedikit keruh', ''],
            [23, 'Urin Rutin (pH)', '', '4,5-8', ''],
            [23, 'Urin Rutin (BJ)', '', '1003-1030', ''],
            [23, 'Urin Rutin (Protein)', 'mg/dL', '≤150', ''],
            [23, 'Urin Rutin (Bilirubin)', '', 'Negative', ''],
            [23, 'Urin Rutin (Urobilinogen)', 'mg/dL', '0,5-1', ''],
            [23, 'Urin Rutin (Benda Keton)', '', 'Negative', ''],
            [23, 'Urin Rutin (Nitrit)', '', 'Negative', ''],
            [23, 'Urin Rutin (Glukosaurin)', 'mg/dL', '≤130', ''],

            [24, 'Eritrosit', '/LPB', '≤2', ''],
            [25, 'Leukosit', '/LPB', '≤5', ''],
            [26, 'Epitel', '/LPB', '≤15', ''],
            [27, 'Silinder', '/LPK', '0-5', ''],
            [28, 'Kristal', '', 'Negative', ''],
            [29, 'Mikrobiologi', '', 'Negative', ''],

            [30, 'Reduksi Glukosa', '', 'Negative', '37000'],
            [31, 'Protein', 'mg/dL', '≤150', '37000'],
            [32, 'Sedimen', '', 'Negative', '20000'],
            [33, 'Tes Kehamilan', '', 'Positive', '72000'],
            [34, 'Widal', '', 'Negative', '83000'],
            [35, 'HIV', '', 'Negative', '100000'],
            [36, 'Gonorhoea', '', 'Negative', '72000'],
            [37, 'RPR', '', 'Negative', '40000'],
            [38, 'Rapid Plasma Regen', '', 'Negative', '72000'],
            [39, 'TPHA', '', 'Negative', '96000'],
            [40, 'NAPZA', '', 'Negative', '72000'],
            [41, 'HbsAg', '', 'Negative', '121000'],
            [42, 'Anti HbsAg', '', 'Negative', '143000'],
            [43, 'Feses Rutin', '', 'Negative', '39000'],
        ];

        foreach ($exams as $exam) {
            DB::table('exam_results')->insert([
                'examination_id' => $exam[0],
                'nama' => $exam[1],
                'satuan' => $exam[2],
                'nilai_rujukan' => $exam[3],
            ]);
        }
    }
}
