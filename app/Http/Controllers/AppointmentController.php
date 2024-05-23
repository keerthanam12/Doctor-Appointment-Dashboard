<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function save(Request $request){
        $patient = new([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'timing' => $request->get('timing')
        ]);
        $patient->save();

        return redirect()->back();
    }
}
