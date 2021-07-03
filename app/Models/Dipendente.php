<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dipendente extends Model {
    protected $table= 'personale';

    protected $fillable = [
        'id', 'nome', 'cognome', 'ruolo', 'immagine', 'numero_qualifiche' 
    ];

    public function Acquisizione(){
        return $this->belongsToMany(Qualifica::class,'acquisizione_qualifica', 'id_personale', 'id_competenza', 'id', 'id');
    }
}
?>

