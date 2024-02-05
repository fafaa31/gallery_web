<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function likedByUser($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }
}
