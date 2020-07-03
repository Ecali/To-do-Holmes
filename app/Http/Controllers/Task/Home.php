<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function __invoke()
    {
        return view('taskHome', ['tasks' => $this->getTasks(0)], ['completeTask' => $this->getTasks(1)]);
    }
    private function getTasks($x){
        $tasks = DB::table('tasks')->where('do', '=', $x)->where('deleted_at', '!=', 'null')->get();
        return $tasks;
    }
}
