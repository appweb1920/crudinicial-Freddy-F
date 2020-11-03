<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

// NOTA: Necesatio para obtener el usuario -> Auth::user()
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /* NOTA: Cambiamos la ruta de redireccion luego de iniciar */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo;


    /* NOTA: Cambia el indicador para inicio de sesión
        En este Regresa el nombre de usaurio para  comparar */

    public function username(Type $var = null)
    {
        return 'name';
    }

    //El nombre de la función debe ser "redirectTo()"
    public function redirectTo(Type $var = null)
    {
        $user = Auth::user();
        
        // dd($user); //Nos permite ver si  los datos llegan correctamente
        if (is_null($user->tipoUsuario))
            $redirectTo = '/inicio';
        else
            $redirectTo = '/home';
        
        return $redirectTo;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
