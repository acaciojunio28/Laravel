<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HomeModel;

class EventController extends Controller
{
    public function index(){

    
 $projects = HomeModel::simplepaginate(10);
        
  return view('listar', compact('projects'));
   
}
public function create(){
           
     return view('home');
}   
    public function store(Request $request){

 HomeModel::create([
     'name'=>$request->input('nome'),
     'email'=>$request->input('email'),
     'msg'=>$request->input('msg'),
 ]);

 return redirect('/')->with('success', 'Cadastrado com Sucesso.');

}
public function destroy($id){
    HomeModel::findOrFail($id)->delete();
    return redirect('/listar')->with('success', 'Deletado com Sucesso.');
}
public function show($id){
    $edit=HomeModel::findOrFail($id);
    return view('editar',compact('edit'));
}
public function update(Request $request){

HomeModel::FindOrFail($request->id)->update($request->all());


    return redirect('/listar')->with('Edit', 'Editado com Sucesso.');;
   
   }

}