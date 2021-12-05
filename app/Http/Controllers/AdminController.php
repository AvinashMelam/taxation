<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class AdminController extends Controller
{
    public function index()
    {
        if(session()->has('AdminId'))
        {

            return redirect('admin_dashboard');
        }
        else
        {
            return view('admin.login');
        }
    }

    public function admin_login(Request $request)
    {
        $user = $request->username;
        $password = $request->password;
        $login = AdminModel::where('username',$user)->where('password',$password)->get();
        session()->put('AdminId',$login[0]->id);
        session()->put('AdminName',$login[0]->username);
        return redirect('admin_dashboard');
    }

    public function dashboard()
    {
        if(session()->has('AdminId'))
        {

            return view('admin.dashboard');
        }
        else
        {
            return redirect('admin');
        }
    }

    public function logout()
    {
        if(session()->has('AdminId'))
        {
            session()->pull('AdminId');
            session()->pull('AdminName');
        }
        return redirect('admin');
    }
}
