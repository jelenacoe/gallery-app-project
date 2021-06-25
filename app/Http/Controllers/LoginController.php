<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function logout()
  {
    auth()->logout();
    return back();
  }

  public function getLoginForm()
  {
    return view('auth.login');
  }

  public function login(Request $request)
  {
    $credentials = [
      'email' => $request->input('email'),
      'password' => $request->input('password')
    ];
    if (auth()->attempt($credentials)) {
      return redirect('/stranice');
    }

    return view('auth.login', ['invalid_credentials' => true]);
  }
}
