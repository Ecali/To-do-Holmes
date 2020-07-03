<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\taskModel;
use Illuminate\Support\Facades\DB;

class update extends Controller
{
    public function __invoke(Request $req)
    {

        $model = taskModel::find($req->idTask);
        if($req->id == 0)
            $x = 1;
        else
            $x = 0;
        $model->id = $req->idTask;
        $model->do = $x;
        taskModel::where('id', $model->id)->update(['do' => $model->do]);
        $model->save();

        return redirect()->back();
    }
}
