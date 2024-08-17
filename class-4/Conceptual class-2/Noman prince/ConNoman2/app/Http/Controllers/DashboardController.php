<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        return view('pages.home');
    }


    public function tasks_list(){

        $tasks = [
            ['task_name' => 'Task 1', 'task_count' => 5],
            ['task_name' => 'Task 2', 'task_count' => 26],
            ['task_name' => 'Task 3', 'task_count' => 19],
            ['task_name' => 'Task 4', 'task_count' => 12],
        ];
        return view('pages.tasks', compact('tasks'));
    }
}
