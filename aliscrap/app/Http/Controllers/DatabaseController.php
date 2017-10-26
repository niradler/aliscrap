<?php

namespace App\Http\Controllers;

use App\User;
use App\Database;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user(); 
        $db=[];
        $database = \App\Database::where('user_id',  $user->id)
        ->take(1)
        ->get();
        if (count($database)) $db= $database[0];
       
        return view('pages.databases',compact('db'));
    }
    public function add(Request $request)
    {
        $user = Auth::user(); 
        $product = \App\Database::updateOrCreate(
            ['name'=> $request->input('dname'),'user_id' => $user->id],
            [        
            'name'=> $request->input('dname'),
        'host' => $request->input('host'),
         'user_id' => $user->id,
        'port'=> $request->input('port'),
       'username'=> $request->input('username'),
        'password'=> $request->input('password')
      ]);
        return redirect()->route('databases');
    }
    public function destroy($id)
    {
        $p = \App\Database::findOrFail($id);
        $p->delete();
        return redirect()->route('databases');
    }
    public function sync(Request $request)
    {
      
        return redirect()->route('databases');
    }
}
