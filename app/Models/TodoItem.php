<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    //2338480 modified

    use HasFactory;

    protected $fillable = ['title', 'description', 'isCompleted', 'group_id'];

    public function group()
    {
        return $this->belongsTo(TodoGroup::class);
    }
}
