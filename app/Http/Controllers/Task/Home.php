<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\Exception\NoTmpDirFileException;

class Home extends Controller
{
    public function __invoke()
    {
        return view('taskHome',
            ['tasks' => $this->getTasks(0),
            'completeTask' => $this->getTasks(1),
            'deletedTask' => $this->getTasks(null)]
        );
    }
    private function getTasks($x){
        if(!is_null($x))
            $tasks = DB::table('tasks')
                ->where('do', '=', $x)
                ->where('deleted_at', '=', NULL)->get();
        else
            $tasks = DB::table('tasks')->whereNotNull('deleted_at')->get();
        return $tasks;
    }

}
