<?php

namespace App\Http\Controllers;

use App\Models\LabResult;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class LabResultController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $labResults = LabResult::all();
        return $this->success($labResults, 'Lab Result data retreived successfully');
    }

    public function store(Request $request)
    {
        $labResult = new LabResult();
        $labResult->patient_id = $request->patient_id;
        $labResult->examination_id = $request->examination_id;
        $labResult->test_id = $request->test_id;
        $labResult->catatan = $request->catatan;
        $labResult->hasil = $request->hasil;

        if ($labResult->save()) {
            return $this->success($labResult, 'Lab Result data stored succesfully', 201);
        }
    }

    public function show($id)
    {
        $labResult = LabResult::where('id', $id)->with('patient')->with('examination')->with('test')->get();
        return $this->success($labResult, 'Lab Result data retreived successfully');
    }

    public function update(Request $request, $id)
    {
        $labResult = LabResult::find($id);
        $labResult->patient_id = $request->patient_id;
        $labResult->examination_id = $request->examination_id;
        $labResult->test_id = $request->test_id;
        $labResult->catatan = $request->catatan;
        $labResult->hasil = $request->hasil;
        if ($labResult->save()) {
            return $this->success($labResult, 'Lab Result data updated succesfully');
        }
    }

    public function destroy($id)
    {
        $labResult = LabResult::find($id);
        $labResult->delete();
        return $this->success($labResult, 'Lab Result data deleted successfully');
    }
}
