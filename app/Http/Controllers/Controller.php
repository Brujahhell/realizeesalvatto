<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Miniaturas;
use App\Models\Subcategorias;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('/base');
    }

    public function cadastro()
    {
        return view('/cadastrar');
    }

    public function login()
    {
        return view('/login');
    }

}
