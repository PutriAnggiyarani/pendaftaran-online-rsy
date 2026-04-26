<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nik' => ['required', 'string', 'max:20', 'unique:'.User::class],
            'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],
            'tanggal_lahir' => ['required', 'date'],
            'golongan_darah' => ['required', 'string', 'max:5'],
            'no_handphone' => ['required', 'string', 'max:20'],
            'alamat' => ['required', 'string'],
        ]);

        $noRm = 'RM-' . date('Y') . '-' . rand(100000, 999999);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nik' => $request->nik,
            'no_rm' => $noRm,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'golongan_darah' => $request->golongan_darah,
            'no_handphone' => $request->no_handphone,
            'alamat' => $request->alamat,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
