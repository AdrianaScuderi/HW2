<?php

use Illuminate\Routing\Controller;

class HomeController extends Controller {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user)) {
            return view('welcome');
        } else {
            return view("home")->with("user", $user);
        }
    }   
}

?>