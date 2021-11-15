<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'category_id'
    ];

    public function tasks()
    {
        return $this->belongsTo(Tasks::class);
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
