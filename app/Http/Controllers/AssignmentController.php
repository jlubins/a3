<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    //
    //GET
    //
    public function show($assignment) {
        return view('assignments.'.$assignment)->with(['assignment' => $assignment]);
    }  
}
