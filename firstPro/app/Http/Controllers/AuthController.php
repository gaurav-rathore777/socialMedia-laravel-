<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   

    public function showLoginForm()
    {
        return view('auth.login');
    }
    

    public function login(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
    
        $user = DB::select("SELECT * FROM auths WHERE name = ? LIMIT 1", [$name]);
    
        if ($user && count($user) > 0) {
            $user = $user[0];
    
            // ✅ Secure password check
            if (Hash::check($password, $user->password)) {
                session(['user_id' => $user->id]);
                return redirect('/');
            }
        }
    
        return back()->with('error', 'Galat Email ya Password');
    }
    
    
    
    public function logout()
{
    session()->forget('user_id');
    return redirect('/login');
}

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:4',
        ]);
    
        // Hash the password before storing
        $hashedPassword = Hash::make($request->password);
    
        DB::insert(
            "INSERT INTO auths (name, password) VALUES (?, ?)",
            [$request->name, $hashedPassword]
        );
    
        return redirect('/login')->with('success', 'Account created successfully. Please login.');
    }
    


}

