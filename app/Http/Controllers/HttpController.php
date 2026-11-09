<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chamado;

 
class HttpController extends Controller
{
    // GET - Exibir a página do Helpdesk
    public function index()
    {
 
        return view('projetos.http');

    }
 
    // POST - Receber os formulários do Helpdesk
  
}
 