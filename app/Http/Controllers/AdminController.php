<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            session([
                'admin_id' => $user->id,
                'admin_name' => $user->name
            ]);

            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Invalid Email or Password');
    }

    public function dashboard()
    {
        if (!session('admin_id')) {
            return redirect('/admin/login');
        }

        return view('admin.dashboard');
    }
}