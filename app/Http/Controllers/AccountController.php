<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePassword;
use App\Http\Requests\NameRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NameRequest $request)
    {       
            $user =  DB::table('users')
                    ->where('email',$request->email)->get();
                    $usert =  DB::table('users')
                    ->where('email',Auth::user()->email )->get();

                  if (isset($user[0]->email) &&  $usert[0]->email !== $request->email ){
                    return redirect('/account')->with('error','l\'email est exits'); 
                  }
                    
                  DB::table('users')
                  ->where('id',Auth::user()->id)
                  ->update([
                      'name' => $request->name,
                      'email' => $request->email, 
                  ]);
                         
            
        return redirect('/account')->with('msg','changement est réussi'); 

    }

    protected function change(ChangePassword $request){

            DB::table('users')
            ->where('id',Auth::user()->id)
            ->update([
                'password' => Hash::make($request->password_confirmation)
            ]);
            return redirect('/account')->with('msg','changement de mot de passe réussi');  
    }

}
