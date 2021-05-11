<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $patients = Patient::all();
        return $this->success($patients, 'Patients Data Retreived Successfully');
    }

    public function show($id)
    {
        $patient = Patient::find($id);
        return $this->success($patient, 'Patient Data Retreived Successfully');
    }

    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->no_rm = $request->no_rm;
        $patient->nama = $request->nama;
        $patient->nik = $request->nik;
        $patient->tempat_lahir = $request->tempat_lahir;
        $patient->tanggal_lahir = $request->tanggal_lahir;
        $patient->jenis_kelamin = $request->jenis_kelamin;
        $patient->alamat = $request->alamat;
        $patient->kecamatan = $request->kecamatan;
        $patient->kabupaten = $request->kabupaten;
        $patient->provinsi = $request->provinsi;
        $patient->no_telp = $request->no_telp;
        $patient->email = $request->email;
        $patient->nama_wali = $request->nama_wali;
        $patient->jenis_kelamin_wali = $request->jenis_kelamin_wali;
        $patient->no_telp_wali = $request->no_telp_wali;

        if ($patient->save()) {
            return $this->success($patient, 'Patient Data Added Successfully', 201);
        }
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $patient->no_rm = $request->get('no_rm');
        $patient->nama = $request->get('nama');
        $patient->nik = $request->get('nik');
        $patient->tempat_lahir = $request->get('tempat_lahir');
        $patient->tanggal_lahir = $request->get('tanggal_lahir');
        $patient->jenis_kelamin = $request->get('jenis_kelamin');
        $patient->alamat = $request->get('alamat');
        $patient->kecamatan = $request->get('kecamatan');
        $patient->kabupaten = $request->get('kabupaten');
        $patient->provinsi = $request->get('provinsi');
        $patient->no_telp = $request->get('no_telp');
        $patient->email = $request->get('email');
        $patient->nama_wali = $request->get('nama_wali');
        $patient->jenis_kelamin_wali = $request->get('jenis_kelamin_wali');
        $patient->no_telp_wali = $request->get('no_telp_wali');

        if ($patient->save()) {
            return $this->success($patient, 'Patient Data Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();

        return $this->success($patient, 'Patient Data Deleted Successfully', 200);
    }
}
