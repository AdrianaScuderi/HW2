<?php

use Illuminate\Routing\Controller;
use App\Models\Trattamento;

class ServiziController extends Controller {
    public function VisualizzoServizi(){
        return Trattamento::all();
    }
}

?>