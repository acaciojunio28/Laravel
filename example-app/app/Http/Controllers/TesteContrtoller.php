<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteContrtoller extends Controller
{
 public function Teste($p1,$p2){
    echo "A soma de $p1 + $p2 é :".($p1+$p2);

 }
}
