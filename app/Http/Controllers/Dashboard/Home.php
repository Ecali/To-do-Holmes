<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function __invoke()
    {
        return view('dashboard', ['services' => $this->getServices()]);
    }
    private function getServices(){
        $services = DB::table('services')->get();
        return $services;
    }
}
