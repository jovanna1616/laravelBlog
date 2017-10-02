<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
	protected function index() {

		return view('auth.registration');
	}

    protected function create(Request $request) {

    	$this->validate(request(), [
            'name' => 'required',
            'email' => 'required | string | email | max:255 | unique:users',
            'password' => 'required'
        ]);


    	User::create(
    		[
    			'name' => $request->get('name'),
    			'email' => $request->get('email'),
    			'password' => bcrypt($request->get('password'))

    		]
    	);

    	return redirect('/posts');

    }

}
