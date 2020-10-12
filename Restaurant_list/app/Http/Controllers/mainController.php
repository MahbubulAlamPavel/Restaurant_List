<?php

namespace App\Http\Controllers;

use App\Models\people as ModelsPeople;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Restaurant;
use Session;

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
        return redirect('/list');
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
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $password = Hash::make($request->input('password'));
        $data =  DB::insert('insert into people (id,fname,lname,email,phone,password) values (?,?,?,?,?,?)', [null, $fname,$lname, $email, $phone, $password]);

        if($data){
            return view('login');
        }else{
            return view('registration');
        }
    }
    public function login()
    {
        return view('login');
    }
    function logs(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $password = password_hash($password, PASSWORD_DEFAULT);
        $data = DB::select('select id from people where email=? and password=?', [$email,$password]);
        
            if(count($data)){
                return (DB::table('people')->get());
             }else{
                 return view('login');
             }
            } 
            
    public function delete(Request $request)
    {
        $delete = Restaurant::find($request->input('id')); 
        $delete->delete(); 
        return redirect('/list');
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
        return redirect('/list');
    }
}