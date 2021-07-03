<?php

use Illuminate\Routing\Controller;
use App\Models\Dipendente;

class AboutusController extends Controller {
    public function VisualizzoDipendenti(){
        return Dipendente::all();
    }

    public function Dipendenti(){
        return Dipendente::with('Acquisizione')->get();
    }
}

?>