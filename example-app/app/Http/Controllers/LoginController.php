<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function autenticar(request $request){
       $regras=[
        'usuario'=>'email',
        'senha'=>'required'
       ];
       $feddback=[
           'usuario.email'=>'o campo do Usuario e obrigatorio',
           'senha.required'=>'o campo senha e obrigatorio'
        ];

        $request->validate($regras,$feddback);

        $email=$request->get('usuario');
        $password=$request->get('senha');

        $user=new User;

        $existente=$user->where('email',$email)
                    ->where('password',$password)
                    ->get()
                    ->first();
      if(isset($existente->name)){
          session_start();
          $_SESSION['nome']=$existente->name;
          $_SESSION['email']=$existente->email;
         
          return redirect('/listar');
      }
      else{
        return redirect('/login')->with('Edit', 'Senha ou Usuario Invalido.');
      }
    }
}
