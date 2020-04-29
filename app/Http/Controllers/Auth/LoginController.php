<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  public function login(){
      $credencials = $this->validate(request(),[
          'email' => 'email|required|string',
          'password' => 'required|string'
      ]);

        //Auth::attempt($credencials); // esto verifica si este usuario existe en la tabla ususarios

        if( Auth::attempt($credencials)){
            return 'Tu sesion ha iniciado correctamente';
        }else{
            return 'Usuario o 
            
            
            invalido';
        }
  }
   
}
