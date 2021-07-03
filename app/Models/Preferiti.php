<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preferiti extends Model {
    protected $table= 'prodotti_salvati';

    protected $fillable = [
        'id_cl', 'immagine', 'nome'
    ];
}
?>