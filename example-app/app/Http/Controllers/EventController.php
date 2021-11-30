<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class EventController extends Controller
{
    public function index(){
        $nome = "mateus";
    return view('home',['nome' => $nome]);}
}
