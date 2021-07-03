<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualifica extends Model {
    protected $table= 'qualifica';

    protected $fillable = [
        'nome'
    ];

    public function Acquisizione2(){
        return $this->belongsToMany(Dipendente::class,'acquisizione_qualifica', 'id_competenza', 'id_personale', 'id', 'id');
    }
}
?>
