<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'list_id',
        'name',
        'reminder_datetime',
        'due_date',
        'attachment_url',
        'note',
        'is_complete',
        'is_my_day'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function lists()
    {
        return $this->belongsTo(Lists::class);
    }

    public function subtasks()
    {
        return $this->hasMany(Subtasks::class);
    }
    
    public function taskCategories()
    {
        return $this->hasMany(TaskCategories::class);
    }
}
