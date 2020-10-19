<?php

namespace App\Http\Controllers;

use App\Models\people as ModelsPeople;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Restaurant;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class mainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    function list() {
        $data = Restaurant::all();
        return view('list',["data"=>$data]);
    }
    public function add()
    {
        return view('add');
    }
    public function new(Request $request)
    {
        $restaurant=new Restaurant; 
        $restaurant->name=$request->input('name'); 
        $restaurant->email=$request->input('email'); 
        $restaurant->address=$request->input('address'); 
        $restaurant->save(); 
        // $req->Session()->flash('status','Successfully Inserted'); 
        return redirect('/list')->with('success','Data Added Successfully');
    }
    public function search()
    {
        return view('search');
    }
    public function register()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $user = new User;
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = Crypt::encrypt($request->input('password'));
        $user->save();
        return redirect('/login');
    }
    public function login()
    {
        return view('login');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }
    function logs(Request $request)
    {
        $user = User::where("email",$request->input('email'))->get();
        if(Crypt::decrypt($user[0]->password)==$request->input('password'))
        {
            $request->session()->put('user',$user[0]->fname);

            return redirect('/list');
        }else{
            return redirect('/login')->with('wrong','Wrong Email/Password');
        }
        
    } 
            
    public function delete(Request $request)
    {
        $delete = Restaurant::find($request->input('id')); 
        $delete->delete(); 
        return redirect('/list')->with('success','Data Delete Successfully');
    }
    public function edit()
    {
        // $data = Restaurant::find($id);
        return view('edit');
    }
    public function update(Request $request)
    {
        $restaurant=Restaurant::find($request->input('id')); 
        $restaurant->name=$request->input('name'); 
        $restaurant->email=$request->input('email'); 
        $restaurant->address=$request->input('address'); 
        $restaurant->save(); 
        // $req->Session()->flash('status','Successfully Inserted'); 
        return redirect('/list')->with('success','Data updated Successfully');
    }
}