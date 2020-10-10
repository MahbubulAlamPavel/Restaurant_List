<?php

namespace App\Http\Controllers;

use App\Models\people as ModelsPeople;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Restaurant;

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
        $name = $request->input('name');
        $email = $request->input('email');
        $address = $request->input('address');
        DB::insert('insert into restaurants (id,name,email,address) values (?,?,?,?)', [null, $name, $email, $address]);
         $request->Session()->flash('status','Successfully submitted');
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
        }