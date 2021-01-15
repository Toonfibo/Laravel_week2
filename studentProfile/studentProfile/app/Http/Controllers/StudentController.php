<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        return view('student-list');
    }
    public function create(){
        return view('student-create');
    }
    public function show($id){
        return view('student-show');
    }
}
