<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    use HasFactory;

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function examresults()
    {
        return $this->belongsTo(ExamResult::class, 'exam_result_id');
    }

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
