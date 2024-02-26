<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    public function index()
    {
        return view('extracurriculars', [
            "tittle" => 'extracurricular',
            "extra" => Extracurricular::all()
        ]);
    }
}
