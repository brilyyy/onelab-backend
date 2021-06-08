<?php

namespace App\Http\Controllers;

use App\Models\Laborat;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class LaboratController extends Controller
{
    use ApiResponser;


    public function index()
    {
        $laborats = Laborat::all();
        return $this->success($laborats, 'Laborats Data Retreived Succesfully');
    }
}
