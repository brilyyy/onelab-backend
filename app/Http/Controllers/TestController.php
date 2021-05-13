<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class TestController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $tests = Test::all();
        return $this->success($tests, 'Tests data retreived successfully');
    }

    public function store(Request $request)
    {
        $test = new Test();
        $test->nama = $request->nama;

        if ($test->save()) {
            return $this->success($test, 'Test data created successfully', 201);
        }
    }

    public function show($id)
    {
        $test = Test::where('id', $id)->with('examinations')->get();

        return $this->success($test, 'Test data retreived successfully');
    }

    public function update(Request $request, $id)
    {
        $test = Test::find($id);
        $test->nama = $request->nama;
        if ($test->save()) {
            return $this->success($test, 'Test data updated successfully');
        }
    }

    public function destroy($id)
    {
        $test = Test::find($id)->delete();

        return $this->success($test, 'Test data deleted successfully');
    }
}
