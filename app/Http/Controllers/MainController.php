<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Message;

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
    
    public function Viewvideofunc(Request $request) {
        $rid = $request->id;
        return view('view-video', array('sid'=>$rid));
    }
    
    public function CreateMsgfunc(Request $request) {
        $msgvari = new Message;
        $msgvari->msg_effect = $request->scrollmode;
        $msgvari->msg_speed = $request->scrollspeed;
        $msgvari->msg_duration = $request->duration;
        $msgvari->msg_xpos = $request->xposition;
        $msgvari->msg_ypos = $request->yposition;
        $msgvari->msg_fonttype = $request->fonttype;
        $msgvari->msg_fontsize = $request->fontsize;
        $msgvari->msg_fontcolor = $request->textcolor;
        $msgvari->msg_del = 0;
        $msgvari->msg_text = $request->examtext;
        $msgvari->save();
        return view('index');
    }
}
