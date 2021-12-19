<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresContrtoller extends Controller
{
 public function index(){
$fornecedores=['fornecedores','fornecedores','fornecedores','fornecedores','fornecedores','fornecedores','fornecedores','fornecedores','fornecedores','fornecedores','fornecedores','fornecedores','fornecedores','fornecedores'];
     return view('fornecedores',compact('fornecedores'));
 }
}
 