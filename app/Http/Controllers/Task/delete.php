<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\taskModel;
use Illuminate\Database\Eloquent\SoftDeletes;


class delete extends Controller
{
    public function __invoke(Request $req)
    {
        $model = taskModel::find($req->idTaskd);
        $model->delete();

        return redirect()->back();
    }
}
