<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'post_id';

    protected $fillable = [
        'titre', 'description', 'image', 'poster_id', 'session_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'poster_id', 'user_id');
    }

    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id', 'id_session');
    }
    public function likes()
{
    return $this->hasMany(Like::class);
}
}
