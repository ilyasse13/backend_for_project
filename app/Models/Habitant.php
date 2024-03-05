<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitant extends Model
{
    use HasFactory;
    protected $primaryKey = 'CIN';

    protected $fillable = [
        'CIN', 'Nom', 'prenom', 'num_app', 'num_imm', 'image', 'session_id', 'id_admin'
    ];

    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id', 'id_session');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'CIN');
    }
}
