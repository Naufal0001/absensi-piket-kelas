<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthentiacationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Login', ["title" => "Login"]);
    }

    public function Login(Request $request){
        $user = $request->validate([
            'email' => "email|required",
            'password' => "required|min:3"
        ]);

        if(Auth::attempt($user)){
            $request->session()->regenerate();
 
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Akun tidak terdaftar silahkan periksa kembali.',
        ])->onlyInput('email');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => "email|required",
            'password' => "required|min:3",
            'name'  => "requried|min:2"
        ]);

        User::create([
            $data
        ]);

        return redirect('/login')->with('success', 'Berhasil mendaftarkan akun');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function Logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
