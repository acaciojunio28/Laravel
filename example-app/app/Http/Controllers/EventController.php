<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HomeModel;

class EventController extends Controller
{
    public function create(){


    return view('home');
}
    public function store(Request $request){

 HomeModel::create([
     'name'=>$request->nome,
     'email'=>$request->email,
     'msg'=>$request->msg,
 ]);
 return redirect('/')
 ->with('success', 'Cadastrado com Sucesso');
    }
}
