<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('karywan.index', [
            "title" => "Karyawan",
            "active" => "karyawan"
        ]);
    }
}
