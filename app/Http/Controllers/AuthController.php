<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Hash;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.signin');
    }  
      
    public function dashboardView()
    {
        return view('auth.dashboard');
    }  
      

    public function createSignin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('noticias')->withSuccess('Bem Vindo ' . Auth::user()->name) . '!';
        }
        return redirect("login")->withSuccess('Dados Errados!');
    }


    public function signup()
    {
        return view('auth.signup');
    }
      

    public function customSignup(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'apelido' => 'required',
            'email' => 'required|email|unique:users',
            'vat_number' => 'max:13',
            'password' => 'required|confirmed|min:6',
        ]);
        $data = $request->all();
        
        $user = User::create([
            'name' => $data['name'],
            'apelido' => $data['apelido'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        Auth::login($user);
        return redirect("dashboard")->withSuccess('Conta criada com Sucesso! Bem Vindo ' . Auth::user()->name . '!');
    }
    

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }


    
    
    
}