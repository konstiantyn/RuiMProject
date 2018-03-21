<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class MainController extends Controller
{
    public function Singupfunc(Request $request) {
        $userdb = new User;
        $userdb->user_name = $request->username;
        $userdb->user_password = $request->password;
        $userdb->user_role = 0;
        $userdb->user_del = 0;
        $userdb->save();
        return redirect()->route('name_login');
    }
    
    public function Loginfunc(Request $request) {
        $userdb = new User;
        $result = $userdb->where('user_name', $request->username)->first();
        if(isset($result)) {
            $resulpass = $result->where('user_password', $request->password)->first();
            if(isset($resulpass)) {
                session(['sname' => $request->username]);
                return view('index');
            } else {
                echo 'Fail Password';
            }
        } else {
            echo 'Fail Username and Password';
        }
    }
}
