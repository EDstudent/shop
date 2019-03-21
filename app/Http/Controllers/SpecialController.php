<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class SpecialController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $req = User::all();
        return view('users',['users'=>$req]);
    }
    public function update(Request $request)
    {
        $data = $request->all();
        foreach ($data as $key => $value) {
            $id = substr($key,4);
            if ($value=='creator') $res=3;
            elseif ($value=='admin') $res=2;
            else $res=1;
            if ($id != Auth::User()->id) User::where('id','=',$id)->update(['role'=>$res]);
        }
        return redirect('/admin');
    }
}