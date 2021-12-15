<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class PageController extends Controller
{
    public function noticias()
    {
        $noticias = Noticia::all();
        return view('noticias', compact('noticias'));
    }
}
