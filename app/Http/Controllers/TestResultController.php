<?php

namespace App\Http\Controllers;

use App\Models\TestResult;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class TestResultController extends Controller
{
    use ApiResponser;
    public function store(Request $request)
    {
        $testResult = new TestResult();
        $testResult->exam_result_id = $request->exam_result_id;
        $testResult->test_id = $request->test_id;
        $testResult->sample_id = $request->sample_id;
        $testResult->lab_result_id = $request->lab_result_id;
        $testResult->hasil = $request->hasil;
        $testResult->catatan = $request->catatan;

        if ($testResult->save()) {
            return $this->success($testResult, 'Stored successfully', 201);
        }
    }
    public function update(Request $request, $id)
    {
        $testResult = TestResult::find($id);
        $testResult->exam_result_id = $request->exam_result_id;
        $testResult->test_id = $request->test_id;
        $testResult->sample_id = $request->sample_id;
        $testResult->lab_result_id = $request->lab_result_id;
        $testResult->hasil = $request->hasil;
        $testResult->catatan = $request->catatan;

        if ($testResult->save()) {
            return $this->success($testResult, 'Stored successfully', 201);
        }
    }

    public function show($id)
    {
        # code...
        $testResult = TestResult::where('lab_result_id', $id)->with('examination')->get();

        return $this->success($testResult, 'retreived successfully');
    }
}
