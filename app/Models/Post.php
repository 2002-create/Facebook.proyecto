<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'user_id', 'imagen', 'autor', 'contenido'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Puedes agregar más relaciones o métodos según sea necesario
}
