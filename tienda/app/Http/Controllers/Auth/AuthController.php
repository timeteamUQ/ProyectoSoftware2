<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    protected $redirectPath = '/';
    //protected $redirectAfterLogout = "/auth/login";

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        	\Session::forget('carrito');
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
            'identificacion' => 'required',
            'nombre' => 'required|max:255',
            'telefonor' => 'required|max:255',
            'telefonoc' => 'max:255',
            'direccionr' => 'required|max:255',
            'ciudad' => 'required|max:255',
            'departamento' => 'required|max:255',
            'pais' => 'required|max:255',
            'profesion' => 'max:255',
            'email' => 'required|email|max:255|unique:users',
            'user' => 'required|max:255|unique:users',
            'password' => 'required|min:3',
           
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'tipod' => $data['tipod'],
            'identificacion' => $data['identificacion'],
            'nombre' => $data['nombre'],
            'telefonor' => $data['telefonor'],
            'telefonoc' => $data['telefonoc'],
            'direccionr' => $data['direccionr'],
            'ciudad' => $data['ciudad'],
            'departamento' => $data['departamento'],
            'pais' => $data['pais'],
            'profesion' => $data['profesion'],
            'email' => $data['email'],
            'user' => $data['user'],
            'password' => bcrypt($data['password']),
            'tipo' => "cliente",
            'active' => 1,
        
        ]);
    }
}
