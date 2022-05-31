<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    public function login()
    {
        return view('pages.login');
    }

    public function main()
    {
        $data = DB::table('employee_a_s')->get();
        return view('pages.main',compact('data',$data));
    }

    public function process()
    {
        $data = DB::table('employee_a_s')->get();
        return view('pages.process',compact('data',$data));
    }

    public function add()
    {
        $data = DB::table('employee_a_s')->get();
        return view('pages.add',compact('data',$data));
    }

    public function get_add_data(Request $request)
    {
        $number = $request -> get('number');      //抓值
        $name = $request -> get('name');
        $type = $request -> get('type');
        $employee = $request -> get('employee');
        $phone = $request -> get('phone');
        $email = $request -> get('email');

        DB::table('employee_a_s') -> insert([   //存到資料庫中
        'number' =>$number,
        'name' => $name,
        'type' => $type,
        'employee' => $employee,
        'phone' => $phone,
        'email' => $email
        ]);
        return redirect() -> route('main');  //回到主畫面
    }
}
