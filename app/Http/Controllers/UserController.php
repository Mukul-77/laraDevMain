<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rules\Uppercase;

class UserController extends Controller
{
    public function addUser(Request $request){

        $request->validate([
            'username' => 'required|min:3|max:15',
            'email'=> 'email|required',
            'city'=> ['required', new Uppercase()],

        ], [
            'username.required' => 'This is required',
            'username.min' => 'Username must atleast 3 char long',
            'username.max' => 'username no long than 15 char long'
        ]);
        return $request;
    }

    public function getFormData(Request $request){
        dd($request->all());
    }
}
