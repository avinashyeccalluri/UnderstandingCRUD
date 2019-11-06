<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class studenttaskscontroller extends Controller
{
    public function update(task $task){
        $task->update([
            'Completed'=>request()->has('completed')
        ]);
        return back();
    }
}
