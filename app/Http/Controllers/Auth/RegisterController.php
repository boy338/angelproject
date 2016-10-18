<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use App\Notifications\RegisterConfirmEmail;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
     * Handle a registration request for the application.
     *
     * @param  App\Http\Requests\Auth\RegisterRequest  $request
     * @param  App\Repositories\UserRepository  $userRepository
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request, UserRepository $userRepository)
    {
        $user = $userRepository->store(
            $request->all(),
            str_random(30)
        );

		$this->notifyUser($user);	

		return back()->with('success', trans('auth/verify.message'));
    }

    /**
     * Notify user with email
     *
     * @param  \App\User  $user
     * @return void
     */
    protected function notifyUser(User $user)
    {
        $user->notify(new RegisterConfirmEmail($user->confirmation_code));
    }

    /**
     * Handle a confirmation request
     *
     * @param  \App\Repositories\UserRepository $userRepository
     * @param  string  $confirmation_code
     * @return \Illuminate\Http\Response
     */
    public function confirm(UserRepository $userRepository, $confirmation_code)
    {
        $userRepository->confirm($confirmation_code);

        return redirect('/')->with('confirm_success', trans('auth/verify.confirm-success'));
    }
}
