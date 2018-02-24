<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function typography(Request $request)
    {

        if ($request['workText']!='')
        {
            $result = $request->session()->all();
            $token = $result['_token'];
            return view('welcome',['token'=>$token, 'workText'=>$request['workText']]);
        }

        
    }
}
