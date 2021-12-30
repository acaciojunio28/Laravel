<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SairController extends Controller
{
public function sair(){
    session_destroy();
    
    return redirect('/login');
}
}
