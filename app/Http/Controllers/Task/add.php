<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\taskModel;
use Illuminate\Http\Request;

class add extends Controller
{
    public function __invoke(Request $req)
    {


        $model = new taskModel();
        $model->title = $req->title;
        $model->desc = $req->desc;
        $model->do = 1;

        $model->save();
        session()->flash('message', 'Complimenti hai aggiunto un nuovo task');
        return redirect()->back();
    }
}
