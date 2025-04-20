<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // You can leave this or remove it since we're overriding authenticated()
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        // Redirect admin to dashboard
        if ($user->role == 1) {
            return redirect()->route('admin.dashboard');
        }

        // Regular user stays on the welcome page
        return redirect('/');
    }
}
