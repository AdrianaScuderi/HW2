<?php

use Illuminate\Routing\Controller;
use App\Models\User;  //questa classe serve per effettuare la query
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller {
    
    //questa funzione verifica che l'utente sia loggato, altrimenti lo reindirizza 
    public function login(){  
        if(Auth::check()) { //stabilisce se il login è stato fatto
            return redirect("/");
        } else {
            return view('login')->with('csrf_token', csrf_token());
        }
    }


    public function checkLogin(Request $request) {
        $credenziali = $request -> only('email', 'password'); 

        if(Auth::attempt($credenziali)) { //stabilisce se il login va a buon fine 
            return redirect('/');
        } else {
            return redirect('login')->withInput()->withErrors(['Errore'=>'Email o password errata']); //ritorno alla pagina di login ma mantenendo l'input nel form

        }
    }

    public function logout() {
        Auth::logout();
        Session::flush(); //elimino i dati di sessione
        return view('login'); //e mi reindirizzo alla pagina di login
    }
}
?>