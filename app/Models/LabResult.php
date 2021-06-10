<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabResult extends Model
{
    use HasFactory;

    public function testresults()
    {
        return $this->hasMany(TestResult::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function laborat()
    {
        return $this->belongsTo(Laborat::class);
    }
    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
