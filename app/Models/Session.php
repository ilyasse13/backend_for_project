<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_session';

    protected $fillable = [
        'nom_session', 'id_admin',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'CIN');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'session_id', 'id_session');
    }
}
