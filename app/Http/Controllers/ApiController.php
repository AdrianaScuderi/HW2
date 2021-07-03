<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Preferiti;


class ApiController extends Controller {

    public function CaricoProdotti($query) {
        $json = Http::get("http://makeup-api.herokuapp.com/api/v1/products.json?brand=l'oreal&product_type=".$query);

        if ($json->failed()) abort(500);

        return $json;
    }

    public function AggiungiPreferiti($user, Request $request) {
        $preferito = Preferiti::create([
            'id_cl'=> $user,
            'immagine'=> $request->input('immagine'),
            'nome'=> $request->input('nome')    
        ]);

        return $preferito;
    }

    public function TogliPreferiti($user, Request $request) {
        return Preferiti::where('nome', $request->input('nome'))->where('id_cl',$user)->delete();
        
    }

    public function MantieniPreferiti($user) {
        return Preferiti::where('id_cl', $user)->get();
        
    }

    public function CaricoArticoli() {
        $json = Http::get("http://api.mediastack.com/v1/news", [
            'access_key'=>env('NEWS_APIKEY'),
            'languages'=>'it',
            'keywords'=>'skincare',
            'limit'=>'10'
        ]);

        if ($json->failed()) abort(500);

        return $json;
    }
}
?>