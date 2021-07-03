<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trattamento extends Model {
    protected $table= 'trattamento';

    protected $fillable = [
        'inmagine', 'nome', 'costo', 'descrizione'
    ];
}
?>