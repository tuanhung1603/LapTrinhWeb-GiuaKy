<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorities extends Model
{
    use HasFactory;

    protected $primaryKey = 'favorite_id';

    // định nghĩa mối quan hệ đảo ngược
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_favorite', 'favorite_id', 'user_id');
    }
}
