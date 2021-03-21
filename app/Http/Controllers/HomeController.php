<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function store(HomeRequest $request) {

        $user = DB::table('caractere_body')->where('id_user',$request->id_user)->first();
        if(empty($user)){
            DB::table('caractere_body')
            ->insert([
                'id_user' => $request->id_user,
                'sex' => $request->sex,
                'taille' => $request->taille,
                'poid' => $request->poid,
                'age' => $request->age,
                'imc' => $request->poid / pow(($request->taille / 100),2),
            ]);
        }else{
            DB::table('caractere_body')
            ->where('id_user',$request->id_user)
            ->update([
                'id_user' => $request->id_user,
                'sex' => $request->sex,
                'taille' => $request->taille,
                'poid' => $request->poid,
                'age' => $request->age,
                'imc' => $request->poid / pow(($request->taille / 100),2),
            ]);
        }
        return redirect()->route('nextHome')->with('status', $request->poid / pow(($request->taille / 100),2) );
    }
}
