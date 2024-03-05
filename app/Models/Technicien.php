<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technicien extends Model
{
    use HasFactory;
    protected $primaryKey = 'CIN';

    protected $fillable = ['CIN', 'Nom', 'Prenom', 'Telephone', 'id_metier'];

    public function metier()
    {
        return $this->belongsTo(Metier::class, 'id_metier', 'id');
    }
}
