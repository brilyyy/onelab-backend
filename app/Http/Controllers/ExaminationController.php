<?php

namespace App\Http\Controllers;

use App\Models\Examination;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $examinations = Examination::with('examresults')->get();
        return $this->success($examinations, 'Examinations data retreived successfully');
    }

    public function store(Request $request)
    {
        $examination = new Examination();
        $examination->test_id = $request->test_id;
        $examination->nama = $request->nama;
        $examination->harga = $request->harga;
        $examination->nilai_rujukan = $request->nilai_rujukan;

        if ($examination->save()) {
            return $this->success($examination, 'Examination data created successfully', 201);
        }
    }

    public function show($id)
    {
        $examination = Examination::find($id);
        return $this->success($examination, 'Examination data retreived successfully', 201);
    }

    public function update(Request $request, $id)
    {
        $examination = Examination::find($id);
        $examination->test_id = $request->test_id;
        $examination->nama = $request->nama;
        $examination->harga = $request->harga;
        $examination->nilai_rujukan = $request->nilai_rujukan;
        if ($examination->save()) {
            return $this->success($examination, 'Examination data updated successfully');
        }
    }

    public function destroy($id)
    {
        $examination = Examination::find($id)->delete();
        return $this->success($examination, 'Examination data deleted successfully');
    }
}
