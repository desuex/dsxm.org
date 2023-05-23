<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public $email = '';

    public $name = '';

    
    public $password = '';
    
    public $passwordConfirmation='';

    public function register()
    {
        $data = $this->validate([
            'email'=>'required|email|unique:users',
            'name'=>'required',
            'password'=> 'required|min:8|same:passwordConfirmation',
            'passwordConfirmation'=>'required|min:8|same:password'
        ]);
        \App\Models\User::create([
            'email'=>$data['email'],
            'password' => \Hash::make($data['password']),
            'name'=>$data['name']
        ]);

        return redirect('/');
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
