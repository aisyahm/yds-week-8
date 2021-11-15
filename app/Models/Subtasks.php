<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'name',
        'is_complete',
    ];

    public function lists()
    {
        return $this->belongsTo(Lists::class);
    }
}
