<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Label;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tasklabel extends Model
{
    use HasFactory;

    public function tasks(){
        return $this->belongsTo(Task::class, 'task_id');
    }


    public function labels(){
        return $this->belongsTo(Label::class, 'label_id');
    }
}
