<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Repositories\UserRepository;

class UserAjaxController extends Controller
{
    /**
     * The UserRepository instance.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $userRepository;

    /**
     * Create a new UserAjaxController instance.
     *
     * @param  \App\Repositories\UserRepository $userRepository
     * @return void
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Update "seen" field for user.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function updateSeen(Request $request, User $user)
    {
        $this->userRepository->update($request->all(), $user);
        return response()->json();
    }

}
