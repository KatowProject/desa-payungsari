<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->put('login', 'Berhasil Login');
            return redirect()->intended('/dashboard');
            }
        $request->session()->put('gagal', 'Gagal Login');
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();

        $request->session()->put('logout', '');
     
        return redirect('/');
    }

    public function gantipassword()
    {
        return view('dashboard.gantipassword', [
            'title'     =>  'Simpedes | Ganti Password'
        ]);
    }

    public function updatepassword(Request $request)
    {
        
        $request->validate([
            'password'  => 'required',
            'password2' => 'required|same:password'
        ]);

        $password = Hash::make($request->password);
        User::where('id',auth()->user()->id)->update(['password' => $password]);

        $request->session()->put('notif', 'password');

        return back();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|string',
            'username' => 'required|unique:users,username',
            'password' => 'required',
        ]);
            $request->validate(['password2'=> 'same:password']);

            User::create($validate);
            $request->session()->put('regist','berhasil');
            return redirect('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
