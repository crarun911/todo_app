<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'completed', 'group_id'];

    public function group()
    {
        return $this->belongsTo(TodoGroup::class);
    }
}
