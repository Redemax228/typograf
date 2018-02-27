<?php

namespace App\Http\Controllers;
function typograf($text){

    $search = array('°','№','«','»',' - ', '...', '(с)', '(r)', '(tm)');
    $replace = array("&deg;","$#8470;","&laquo;","&raquo;","&nbsp;&mdash;&nbsp;", "&hellip;", "&copy;", "&reg;", "&trade;");
    $text = str_ireplace($search, $replace, $text);
    $text = nl2br($text);
    return $text;
}
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function typography(Request $request)
    {

        if ($request['workText']!='')
        {
            $ses = $request->session()->all();
            $token = $ses['_token'];
            $typograph = new \EMTypograph();

            $typograph->set_text(typograf($request['workText']));
            $result = $typograph->apply();

            return view('welcome',['token'=>$token, 'result'=>$result, 'workText'=>$request['workText']]);

        }

        
    }

};
