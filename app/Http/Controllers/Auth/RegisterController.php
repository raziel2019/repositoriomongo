<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Image; 
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'division' => ['required', 'string', 'max:100'],
            'programa' => ['required'],
            'sei' => ['required'],
            'prodep' => ['required'],
            'grado' => ['required'],
            'curp' => ['required', 'string', 'max:18'],
            'rfc' => ['required', 'string', 'max:100'],
            'especialidad' => ['required'],
            'avatar' => ['required'],
            'cat_profesor' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create( array $data)
    {


        $request = app('request');
        if($request->hasfile('avatar')){
            $avatar = $request->file('avatar');
            $nombre = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/photo/profile/' . $nombre) );
        }
  
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'division' => $data['division'],
            'programa' => $data['programa'],
            'sei' => $data['sei'],
            'prodep' => $data['prodep'],
            'grado' => $data['grado'],
            'curp' => $data['curp'],
            'rfc' => $data['rfc'],
            'especialidad' => $data['especialidad'],
            'avatar' => $nombre,
            'cat_profesor' => $data['cat_profesor'],
            'password' => Hash::make($data['password']),
        ]);

        if($data['cat_profesor'] == 'Administrador')
        {
            $user->assignRole('Administrador');
            
        }
        else
        {
            if($data['cat_profesor'] == 'Supervisor')
            {
                $user->assignRole('Supervisor');
            }
            else
            {
                $user->assignRole('PTC');
            }
        }

        return $user;
    }
    
}
