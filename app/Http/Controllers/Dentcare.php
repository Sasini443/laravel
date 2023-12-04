<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class Dentcare extends Controller
{
    //
    public function login(Request $request)
    {

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6|max:12'
        ]);
        // dd($request->all());//die dom


        $user = User::where('email', $request->email)->first();

        if ($user) {

            if (Hash::check($request->password, $user->password)) {
                return view('dashboard');
            } else {
                return 'Password is not correct';
            }
        } else {
            $user = new User();
            $user->email = $request->email;

            // make used to hash the password
           $request['password'] = Hash::make($request['password']);
// dd($request->all());
            // $user->email = $request['email'];
           $user->password = $request['password'];
            // User::create($request->all());
            $user->save();
            return view('dashboard');
        }




    }
}
