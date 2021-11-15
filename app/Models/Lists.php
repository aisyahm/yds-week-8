<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    use HasFactory;

    protected $fillable = [
        'color_id',
        'user_id',
        'name',
        'password',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function colors()
    {
        return $this->belongsTo(Colors::class);
    }

    public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }
}
