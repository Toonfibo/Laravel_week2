<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamplePageController extends Controller
{
    //
    public function index(){
        return view('example.index');
    }
    public function show(Request $request,$id){
        $v = $request->get('v');
        return view('example.show',compact('id','v'));
    }
    public function create(){
        return view('example.create');
    }
    public function store(Request $request){
        dd($request->all());
    }
}
