<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use App\Companies;

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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        $companies = Companies::all();
        return view('auth.register',compact('companies'));
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
            'firstname' => ['required', 'string', 'max:255'],
            'secondname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data['code'] = str_random(25);
        $company = Companies::where('name', $data['company_id'])->first();

        $user = User::create([
            'firstname' => $data['firstname'],
            'secondname' => $data['secondname'],
            'company_id' => $company['id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'code' => $data['code'],
        ]);

        Mail::send('auth.confirmation_code', $data, function($message) use ($data){
            $message -> to($data['email'], $data['firstname'])->subject('Por favor confirma tu correo');
        });

        return $user;
    }

    public function verify($code)
    {
        /* Obtener el primero que coincida con el código, que mandamos desde
        register controler hacia la ruta en web.php */
        $user = User::where('code', $code)->first();

        /* Si no existe, redirige a la ruta principal */
        if (! $user)
            return redirect('/');

        $user->email_confirmed = 1;
        $user->code = null;
        $user->save();

        return redirect('/login')->with('message','Email confirmado con éxito, espere a que el Administrador active su cuenta');
        
    }   

}