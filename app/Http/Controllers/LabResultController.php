<?php

namespace App\Http\Controllers;

use App\Models\LabResult;
use App\Traits\ApiResponser;
use Carbon\Carbon;
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
        $labResult->laborat_id = $request->laborat_id;
        $labResult->no_spesimen = $request->no_spesimen;
        $labResult->jam_pengambilan_spesimen = $request->jam_pengambilan_spesimen;
        $labResult->tanggal_pengambilan_spesimen = $request->tanggal_pengambilan_spesimen;
        $labResult->tanggal_transaksi = $request->tanggal_transaksi;
        $labResult->status = $request->status;


        if ($labResult->save()) {
            return $this->success($labResult, 'Lab Result data stored succesfully', 201);
        }
    }

    public function show($id)
    {
        $labResult = LabResult::where('id', $id)->with('patient.payment')->with('laborat')->with('patient.payment.examination.examresults')->with('testresults.examresults')->with('testresults.sample')->get();
        return $this->success($labResult, 'Lab Result data retreived successfully');
    }

    public function update(Request $request, $id)
    {
        $labResult = LabResult::find($id);
        $labResult->patient_id = $request->patient_id;
        $labResult->laborat_id = $request->laborat_id;
        $labResult->no_spesimen = $request->no_spesimen;
        $labResult->jam_pengambilan_spesimen = $request->jam_pengambilan_spesimen;
        $labResult->tanggal_pengambilan_spesimen = $request->tanggal_pengambilan_spesimen;
        $labResult->tanggal_transaksi = $request->tanggal_transaksi;
        $labResult->status = $request->status;
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

    public function getLatest()
    {
        $labResult = LabResult::all()->last();
        return $this->success($labResult, 'Lab Result data retreived successfully');
    }

    public function getByPatientId($id)
    {
        $labResult = LabResult::where('patient_id', $id)->get();
        return $this->success($labResult, 'Lab Result data retreived successfully');
    }

    public function getDoneStatus()
    {
        $labResult = LabResult::where('status', 'Sudah Bayar')->with('patient')->get();
        return $this->success($labResult, 'Lab Result data retreived successfully');
    }

    public function getAllData()
    {
        $labResult = LabResult::all()->with('patient.payment')->with('laborat')->with('sample')->with('testresults.examination')->with('patient.payment.examination')->get();
        return $this->success($labResult, 'Lab Result data retreived successfully');
    }
}
