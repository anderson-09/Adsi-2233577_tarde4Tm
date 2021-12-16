<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Product;
use App\Models\Sale;

class ConsultasController extends Controller
{
 
    public function consultas(){

        $consultas = client::select(['nombre','telefono'])->get();

        $consultas = client::where('id','>','4')->get();

        $consultas = client::select(['direccion'])->get();

        echo $consultas;

    }


}
