<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {

        return view('auth.login'); 

    }

    public function login(Request $request)
    { 
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if (\Auth::attempt($request->only('email','password'))) {
            return redirect('home');
        }

        return redirect('login')->withError('الإيميل او كلمة المرور غير صحيحة');
    }



    public function register_view()
    {

        return view('auth.register');

    }

    public function register(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:8|max:16',
            'phone_number' => 'required|min:10',
            'bio' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif'

        ]);

        if ($request->hasfile('image') && $request->file('image')->isValid() ) {
           $image= $request->file('image')->store('images','public'); 
        }

        if (empty($image)) {
            User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'about_me'  => $request->bio,
        ]);
        }else {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => \Hash::make($request->password),
                'phone_number' => $request->phone_number,
                'about_me'  => $request->bio,  
                'image' => $image,
            ]);
        }

        if (\Auth::attempt($request->only('email','password'))) {
            return redirect('home');
        }

        return redirect('register')->withError('Error');
    }

    public function home()
    {

        return view('auth.home');

    }

    public function logout()
    {
        \Session::flush();
        \Auth::logout();

        return redirect('/');

    }

}
