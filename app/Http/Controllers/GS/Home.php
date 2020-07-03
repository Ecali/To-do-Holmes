<?php

namespace App\Http\Controllers\GS;

use App\Http\Controllers\Controller;
use App\taskModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\periodiModel;



class Home extends Controller
{
    public function __invoke()
    {
        return view('gssherlock', [
            'conti' => $this->getConti(),
            'periodi' => $this->getPeriodi(),
            ]);

    }
    private function getConti(){
        $conti = DB::table('conti')->get();
        return $conti;
    }
    private function getPeriodi(){
        $periodi = DB::table('periodi')->get();
        return $periodi;
    }
}
