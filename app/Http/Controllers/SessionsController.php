<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class SessionsController extends Controller
{

	public function __construct() {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create(User $user) {
    	if(!auth()->attempt(request(['username', 'password']))) {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }

        return redirect('/dashboard');
    }

    public function destroy() {
    	auth()->logout();
    	return redirect('/');
    }

}
