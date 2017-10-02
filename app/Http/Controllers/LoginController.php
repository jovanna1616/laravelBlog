<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected function index() {

		return view('auth.login');
	}


    	protected function authenticate(Request $request) {

    	$this->validate(request(), [
            'email' => 'required | string | email | max:255',
            'password' => 'required'
        ]);



    	$user = User::where('email', $request->get('email'))->get();
    	
    	return redirect('/posts');

    }

    
}
