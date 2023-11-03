<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    protected function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email'=>'required|string|email|unique:users|max:255',
            'password'=>'required|string|min:8|confirmed',
            'password_confirmation'=>'required|string|min:8|confirmed',
        ]);

    $user = $this->create($request->all());

    }

    protected function create(array $data)
    {
        return Register::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password']),
            'password_confirmation'=>bcrypt($data['password_confirmation']),
        ]);
    }
}
