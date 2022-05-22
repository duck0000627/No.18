<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function login()
    {
        return view('pages.login');
    }

    public function main()
    {
        return view('pages.main');
    }

    public function process()
    {
        return view('pages.process');
    }
}
