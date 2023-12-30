<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm(){
        if(User::count() > 0) {
            return redirect('/');
        }
        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => 'required',
            'space_id' => 'required'
        ],
        [
                    'name.required' => 'O campo nome é obrigatório.',
                    'last_name.required' => 'O campo sobrenome é obrigatório.',
                    'email.unique' => 'Este email já está em uso.',
                    'email.required' => 'O campo email é obrigatório.',
                    'password.required' => 'O campo senha é obrigatório.',
                    'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
                    'password.confirmed' => 'As senhas devem ser iguais.',
                    'role.required' => 'O campo perfil é obrigatório.',
                    'space_id.required' => 'O campo espaço é obrigatório.'
        ]
            
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'role' => 'super-admin',
            'password' => Hash::make($data['password']),
        ]);
    }
}
