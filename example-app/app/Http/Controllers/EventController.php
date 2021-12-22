<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class EventController extends Controller
{
    public function index(){
        var_dump($_POST);

    return view('home');}
}
