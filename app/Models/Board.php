<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lists;

class Board extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function lists()
    {
        return $this->hasMany(Lists::class);
    }
}
