<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
class ExrsicesController extends Controller
{
    public function index(){
        $response = DB::table('sport')->paginate(10);
        return view('exrcices',['datas'=>$response]);
    }
}
