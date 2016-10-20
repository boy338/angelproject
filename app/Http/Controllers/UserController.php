<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * The UserRepository instance.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $userRepository;


    /**
     * Create a new UserController instance.
     *
     * @param  \App\Repositories\UserRepository $userRepository
	 *
     * @return void
     */
	public function __construct(UserRepository $userRepository)
	{
        $this->userRepository = $userRepository;
	}

    /**
     * Display a listing of the resource.
     *
     * @param \App\Repositories\RoleRepository $roleRepository
     * @param string  $role
     * @return \Illuminate\Http\Response
     */
    public function index(RoleRepository $roleRepository, $role = 'total')
    {
        $users = $this->userRepository->getUsersWithRole(config('app.nbrPages.back.users'), $role);
        $counts = $this->userRepository->counts();
        $roles = $roleRepository->all();

        return view('backend.users.index', compact('users', 'counts', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(RoleRepository $roleRepository)
    {
		$roles = $roleRepository->all();
        return view('backend.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
		$this->userRepository->store($request->all());
		return redirect('user/sort')->with('success', 'create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
		return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(RoleRepository $roleRepository, User $user)
    {
		$roles = $roleRepository->all();
    	return view('backend.users.edit', compact('user', 'roles')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UserUpdateRequest  $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
		$this->userRepository->update($request->all(), $user);
		return redirect('user/sort')->with('success', 'update success'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->userRepository->destroyUser($user);
		return redirect('user/sort')->with('success', 'delect success');
    }
}
