<?php

namespace App\Http\Controllers;

use App\Models\User;
<<<<<<< HEAD
use App\Models\Mahasiswa;
use App\Models\Dekan;
use App\Models\Ketuaprogramstudi;
=======
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
<<<<<<< HEAD
            'email' => 'required|email|unique:tb_user',
            'name' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

=======
            'name' => 'required',
            'email' => 'required|email|unique:user_sate',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);
    
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
<<<<<<< HEAD
            // 'password' => $request->password,
        ]);
        $user->save();

=======
        ]);
        $user->save();
    
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }


    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
<<<<<<< HEAD

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            // Pengecekan role berdasarkan relasi
            $user = Auth::user();
            $roles = [];

            if ($user->mahasiswa) {
                $roles[] = 'mahasiswa';
            }
            if ($user->pembimbingakademik) {
                $roles[] = 'pembimbingakademik';
            }
            if ($user->ketuaprogramstudi) {
                $roles[] = 'ketuaprogramstudi';
            }
            if ($user->dekan) {
                $roles[] = 'dekan';
            }
            if ($user->bagianakademik) {
                $roles[] = 'bagianakademik';
            }
            if (count($roles) === 1) {
                return redirect()->route($roles[0]); // Mengarahkan ke route berdasarkan role
            }
            // Jika user punya lebih dari 1 role, arahkan ke halaman pemilihan role
            
            return view('user.pemilihanrole', compact('roles'));
        }

=======
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
    
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
        return back()->withErrors([
            'password' => 'Wrong email or password',
        ]);
    }

<<<<<<< HEAD
    public function handleRoleSelection(Request $request)
    {
        $request->validate([
            'role' => 'required|string',
        ]);

        // Redirect berdasarkan role yang dipilih
        switch ($request->role) {
            case 'mahasiswa':
                return redirect()->route('mahasiswa');
            case 'pembimbingakademik':
                return redirect()->route('pembimbingakademik');
            case 'ketuaprogramstudi':
                return redirect()->route('ketuaprogramstudi');
            case 'dekan':
                return redirect()->route('dekan');
            case 'bagianakademik':
                return redirect()->route('bagianakademik');
            default:
                return redirect()->route('home');
        }
    }

=======
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
<<<<<<< HEAD
        // $user->password = ($request->new_password);
=======
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
<<<<<<< HEAD

    // public function mahasiswa()
    // {
    //     return view('dashboard.mahasiswa'); // Mengarah ke resources/views/dashboard/mahasiswa.blade.php
    // }

    // public function kaprodi()
    // {
    //     return view('dashboard.kaprodi'); // Mengarah ke resources/views/dashboard/kaprodi.blade.php
    // }
}
=======
}
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
