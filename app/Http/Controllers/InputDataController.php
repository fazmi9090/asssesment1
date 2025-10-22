<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputDataController extends Controller

{
    public function form()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $lokasisensor = $request->input('lokasisensor');
        $ketinggianair = $request->input('ketinggianair');
        $curahhujan = $request->input('curahhujan');
        $kelembapantanah = $request->input('kelembapantanah');


        return view('data', compact('lokasisensor', 'ketinggianair', 'curahhujan', 'kelembapantanah'));
    }
}
