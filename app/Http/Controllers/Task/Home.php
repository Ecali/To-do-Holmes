<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function __invoke()
    {
        return view('taskHome', ['tasks' => $this->getTasks()]);
    }
    private function getTasks(){
        $tasks = DB::table('tasks')->where('do', '=', 0)->get();
        return $tasks;
    }
}
