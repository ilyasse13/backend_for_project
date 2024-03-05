<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'CIN';

    protected $fillable = [
        'CIN', 'Nom', 'prenom', 'username', 'password', 'num_app', 'num_imm', 'tel', 'image',
    ];

    public function session()
    {
        return $this->hasOne(Session::class, 'id_admin', 'CIN');
    }

}
