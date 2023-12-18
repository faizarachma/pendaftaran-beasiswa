<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class hasilController extends Controller
{
    public function hasil(){

        $student = student::all();
        return view('component.hasil', compact(['student']));
    }
}
