<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index(){
        $response =  DB::table('caractere_body')->where('id_user',Auth::user()->id)->get();
         
        $poids_minimum = $response->min('poid');
        $poids_maximuin = $response->max('poid');
        $poids_avr = $response->avg('poid');
        $poids_start = $response[0]->poid;
        $poids_current = $response[count($response)-1]->poid ;
        return view('history',['poids_minimum'=>$poids_minimum,
                                'poids_maximuin'=>$poids_maximuin,
                                'poids_avr'=>$poids_avr,
                                'poids_start'=>$poids_start,
                               'poids_current' =>$poids_current ]);


    }



    public function create(){
        return view('addNew');
    }
    public function store(NewRequest $request){
        $user =  DB::table('caractere_body')->find($request->id_user);
        DB::table('caractere_body')
            ->insert([
                    'id_user' => $user->id_user,
                    'sex'=> $user->sex,
                    'taille' => $request->taille,
                    'poid' => $request->poid,
                    'imc' => $request->poid / pow(($request->taille / 100),2),
                    'age' => $user->age,
                    'date' => $request->date
            ]);

        return redirect('/history');
    } 
}
