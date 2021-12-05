<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\CountryModel;
use Session;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function about()
    {
        return view('users.about');
    }

    public function features()
    {
        return view('users.features');
    }

    public function service()
    {
        return view('users.service');
    }

    public function contact()
    {
        return view('users.contact');
    }

    public function register()
    {
        $countries = CountryModel::all();
        return view('users.register_user')->with('countries',$countries);
    }

    public function user_register(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;
        $country = $request->country;
        $password = $request->password;
        $NewUser = new UserModel;
        $NewUser->name = $name;
        $NewUser->email = $email;
        $NewUser->mobile = $mobile;
        $NewUser->country = $country;
        $NewUser->password = $password;
        $NewUser->save();
        return redirect('UserLogin');
    }

    public function login()
    {
        if(session()->has('UserId'))
        {
            return redirect('dashboard');
        }
        else
        {
            return view('users.login');
        }
    }

    public function user_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $login = UserModel::where('email',$email)->where('password',$password)->get();
        session()->put('UserId',$login[0]->id);
        session()->put('UserName',$login[0]->name);
        session()->put('UserMobile',$login[0]->mobile);
        return redirect('dashboard');
    }

    public function dashboard()
    {
        if(session()->has('UserId'))
        {

            return view('users.dashboard');
        }
        else
        {
            return redirect('UserLogin');
        }
    }

    public function profile()
    {
        if(session()->has('UserId'))
        {

            return view('users.profile');
        }
        else
        {
            return redirect('UserLogin');
        }
    }
    
    public function logout()
    {
        if(session()->has('UserId'))
        {
            session()->pull('UserId');
            session()->pull('UserName');
            session()->pull('UserMobile');
        }
        return redirect('/');
    }
}
