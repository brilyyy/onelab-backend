<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public function labresult()
    {
        return $this->belongsTo(LabResult::class);
    }

    public function examination()
    {
        return $this->belongsTo(Examination::class);
    }
}
