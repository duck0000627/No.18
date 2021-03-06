<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Psy\Util\Str;

class Controller extends BaseController
{
    public function login()
    {
        return view('pages.login');
    }

    public function main()
    {
        $data = DB::table('employee_a_s')->get();
        $lists = DB::table('todolists')->get();
        $bulletins = DB::table('bulletins')->get();
        $process_data = DB::table('processes')->get();
        return view('pages.main',compact('data',$data,'lists',$lists,'bulletins',$bulletins,'process_data',$process_data));
    }

    public function process(Request $request)
    {
        $number = $request->number;
        $data = DB::table('employee_a_s')->get();
        $lists = DB::table('todolists')->get();
        $bulletins = DB::table('bulletins')->get();
        $process = DB::table('processes')->where('number','=',$number)->first();
        $process_data = DB::table('processes')->get();
        $getid = DB::table('employee_a_s')->where('number',$number)->first();
        $result = [
            'number' => $number,
            'data' => $data,
            'process' => $process,
            'lists' => $lists,
            'bulletins' => $bulletins,
            'getid' => $getid,
            'process_data' => $process_data
        ];
//        dd($process_data);
        return view('pages.process',$result);
    }

    public function process_data(Request $request)
    {
        try {
            $number = $request->number;
            DB::table('processes')
                ->where('number', $number)
                ->update([
                    'step1' => $request->step1 == "true" ? true : false,
                    'step2' => $request->step2 == "true" ? true : false,
                    'step3' => $request->step3 == "true" ? true : false,
                    'step4' => $request->step4 == "true" ? true : false,
                    'step5' => $request->step5 == "true" ? true : false,
                    'step6' => $request->step6 == "true" ? true : false,
                    'step7' => $request->step7 == "true" ? true : false,
                    'step8' => $request->step8 == "true" ? true : false,
                    'step9' => $request->step9 == "true" ? true : false,
                    'step10' => $request->step10 == "true" ? true : false,
                    'step11' => $request->step11 == "true" ? true : false,
                    'step12' => $request->step12 == "true" ? true : false,
                    'step13' => $request->step13 == "true" ? true : false,
                    'step14' => $request->step14 == "true" ? true : false,
                    'process' => $request->checkid
                ]);
            return $request;
        }catch (\Exception $exception)
        {
            return $exception;
        }
    }

    public function add()
    {
        $data = DB::table('employee_a_s')->get();
        $lists = DB::table('todolists')->get();
        $bulletins = DB::table('bulletins')->get();
        $process_data = DB::table('processes')->get();
        return view('pages.add',compact('data',$data,'lists',$lists,'bulletins',$bulletins,'process_data',$process_data));
    }

    public function get_add_data(Request $request)
    {
        $number = $request -> get('number');      //??????
        $name = $request -> get('name');
        $type = $request -> get('type');
        $employee = $request -> get('employee');
        $phone = $request -> get('phone');
        $email = $request -> get('email');
//        dd($type);
        DB::table('employee_a_s') -> insert([   //??????????????????
        'number' =>$number,
        'name' => $name,
        'type' => $type,
        'employee' => $employee,
        'phone' => $phone,
        'email' => $email,
        ]);
        DB::table('processes')->insert([
            'number' => $number,

        ]);
        return redirect() -> route('main');  //???????????????
    }

    public function search()
    {
        $data = DB::table('employee_a_s')->get();
        $lists = DB::table('todolists')->get();
        $bulletins = DB::table('bulletins')->get();
        $process_data = DB::table('processes')->get();
        return view('pages.search',compact('data',$data,'lists',$lists,'bulletins',$bulletins,'process_data',$process_data));
    }

    public function search_data(Request $request)
    {
        $number = $request -> get('number');
        $data = DB::table('employee_a_s')
            ->where('number',"like","%".$number."%")
            ->get();
        return $data;
    }

    public function list_add(Request $request)
    {
        $title = $request -> get('List_title');
        $work = $request -> get('List_work');
        DB::table('todolists') -> insert([
            'title' => $title,
            'work' => $work
        ]);
        return redirect() -> route('main');  //???????????????
    }

    public function bulletins_add(Request $request)
    {
        $title = $request -> get('Bulletin_title');  //??????
        $work = $request -> get('Bulletin_work');
        DB::table('bulletins') -> insert([
            'title' => $title,
            'work' => $work
        ]);
        return redirect() -> route('main');  //???????????????
    }

    public function uploadpage()
    {
        return view('pages.fileupload');
    }
    public function upload(Request $request)
    {
        Storage::put('test.jpg', $request->file('ImageFile')->get());
        return view('pages.fileupload')->withMessage('Success Upload');
    }
}
