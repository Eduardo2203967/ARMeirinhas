<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\User;

class PageController extends Controller
{
    public function noticias()
    {
        $noticias = Noticia::all();
        return view('noticias', compact('noticias'));
    }

    public function useredit(){

        $users = User::all();
        return view('edit_profile', compact('users'));
    }
}
