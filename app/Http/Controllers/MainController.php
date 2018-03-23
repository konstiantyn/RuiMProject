<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Message;
use App\Videoclip;
use App\Project;

class MainController extends Controller
{
    public function Singupfunc(Request $request) {
        $userdb = new User;
        $userdb->user_name = $request->username;
        $result = $userdb->where('user_name', $request->username)->first();
        if(isset($result)) {
            echo $result; die();
            $error_msg_dup = "Duplicated Username.";
            return view('signup', array('error_msg_signup' => $error_msg_dup));
        }
        $userdb->user_password = Hash::make($request->password);
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
                $error_msg_logpass = "Wrong Password.";
                return view('login', array('error_msg_logpassword' => $error_msg_logpass, 'error_msg_loginuser' => ''));
            }
        } else {
            $error_msg_logusername = "Wrong Username";
            return view('login', array('error_msg_loginuser' => $error_msg_logusername, 'error_msg_logpassword' => ''));
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
    
    public function CreateVideoClipfunc(Request $request) {
        $videodb = new Videoclip;
        $videodb->vd_name = $request->videocliptitle;
        $videodb->vd_url = $request->videourl;
        $videodb->vd_del = 0;
        $videodb->save();
    }

    public function CreateProjectfunc(Request $request) {
        $projectdb = new Project;
        $projectdb->prj_name = $request->projectname;
        $projectdb->prj_url = $request->projecturl;
        $projectdb->prj_del = 0;
        $projectdb->save();
    }
}
