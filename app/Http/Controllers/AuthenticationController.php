<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Nexmo\Laravel\Facade\Nexmo;

class AuthenticationController extends Controller
{
    public function registrationf() {
        return view ('register');
}
public function loginf() {
    return view ('login');
}

public function home() {
    return view ('home');
}
public function register(Request $request) {
    $request->validate([
        'name' => 'required|string',
        'number' => 'required|numeric',
        'email' => 'required|email',
        'password' => 'required|string'
    ]);

    $token = Str::random(24);

    $user = User::create([
        'name' => $request->name,
        'number' => $request->number,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'remember_token' => $token
    ]);

    Mail::send('verification-email', ['user'=>$user], function($mail) use ($user) {
        $mail->to($user->email);
        $mail->subject('Account verification');
        $mail->from('bagsolingmarydaileen20@gmail.com', 'IPT');
    });

    Nexmo::message()->send([
        'to'=>($request->number),
        'from'=>'sender',
        'text'=>'WELCOME TO PAWS SHELTER. The verfication has been sent to your email.'
    ]);

    return redirect('/login')->with('Message', 'Your account has been created. Please check your email for the verification.');

}

public function login(Request $request) {
    $request->validate([
        'email' => 'email|required',
        'password' => 'string|required',
    ]);

    $user = User::where('email', $request->email)->first();

    if(!$user || $user->email_verified_at==null) {
        return redirect('/login')->with('Error','Sorry you are not yet verified');
    }

    $login = auth()->attempt([
        'email' => $request->email,
        'password' => $request->password
    ]);

    if(!$login) {
        return back()->with('Error', 'Invalid credentials');
    }

    return redirect('/dashboard');
}

public function verification(User $user, $token) {
    if($user->remember_token!==$token) {
        return redirect('/login')->with('Error', 'The token is invalid');
    }
    $user->email_verified_at = now();
    $user->save();

    return redirect('/login')->with('Message','Your account has been verified.');
}
public function profile() {
    $users = User::where('id', auth()->user()->id)->orderBy('name')->get();
    return view('/profile', ['users'=>$users]);
    return response()->json(auth()->user());
}

}
