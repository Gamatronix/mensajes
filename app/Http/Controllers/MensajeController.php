<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB; // para utilizar procedimientos almacenadaos
use Illuminate\Http\Request; // para recuperar datos de la vista
use DataTables\DataTables;

class MensajeController extends Controller
{
    public function index(){
        return view('mensaje.index');
           }
}
