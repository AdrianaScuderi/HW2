<?php

use Illuminate\Routing\Controller;

class ProdottiController extends Controller {

    public function index() {
        if (Auth::check()) {
            return view('prodotti');
        } else {
            return redirect('/');
        }
    }   
}

?>