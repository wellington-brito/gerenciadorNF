<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use \App\Models\NotaFiscal;

class NotaFiscalController extends Controller
{
    public function index() {
        
        $notasFiscais = NotaFiscal::All();
        
        return view('notasfiscais.index', compact('notasFiscais'));
    }
}
