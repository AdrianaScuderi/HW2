<?php

use Illuminate\RoutingController;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {

    protected function create() {
     $request = request();
    
     if($this->countErrors($request) === 0) {
         $newUser =  User::create([
         'email' => $request['email'],
         'password' => Hash::make($request['password']),
         'nome' => $request['name'],
         'cognome' => $request['surname'],
         ]);
           if ($newUser) { 
            Auth::login($newUser); //serve per mantenere il cliente connesso dopo la registrazione
             return redirect('/');
            } else {
             return view('registrazione')->withInput();
            }
        } else {
         return view('registrazione')->withInput();    
        }
    }

    private function countErrors($data) {
        $error = array();

        # EMAIL
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
           $error[] = "Email non valida";
        } else {
            $email = User::where('email', $data['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }
        }
        
        # PASSWORD
        if (strlen($data["password"]) < 8) {
            $error[] = "Caratteri password insufficienti";
        } 

        # CONFERMA PASSWORD
        if (strcmp($data["password"], $data["confirm_password"]) != 0) {
            $error[] = "Le password non coincidono";
        }

        return count($error);
    }

    public function checkEmail($query) { 
        $exist = User::where('email', $query)->exists();
        return['exists' => $exist]; //questa funzione controlla se data una email questa esiste nel db
    }

    public function index() {  //questa funzione serve a visualizzare la pagina di registrazione (dove c'è il form)
        return view('registrazione'); //in realtà è il controller che ritorna la view
    }

}
?>