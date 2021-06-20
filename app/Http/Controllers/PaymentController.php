<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    use ApiResponser;

    public function store(Request $request)
    {
        $payment = new Payment();
        $payment->patient_id = $request->patient_id;
        $payment->examination_id = $request->examination_id;
        if ($payment->save()) {
            return $this->success($payment, 'payment stored', 201);
        }
    }
}
