<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabResult extends Model
{
    use HasFactory;

    public function examination()
    {
        return $this->belongsTo(Examination::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
