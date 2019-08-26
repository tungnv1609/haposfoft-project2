<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\CreateUserRequest;
use App\User;
use App\Role;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Config;
use Symfony\Component\Debug\FatalErrorHandler\UndefinedFunctionFatalErrorHandler;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $user;
    private $role;
    private $department;

    public function __construct(User $user, Role $role, Department $department)
    {
        $this->user = $user;
        $this->role = $role;
        $this->department = $department;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $users = User::paginate(5);
        return view('user.index', ['list_user' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $roles = $this->role->all();
        $departments = $this->department->all();
        return view('user.create', compact('roles', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        try {
            DB::beginTransaction();
            $userCreate = $this->user->create([
                "department_id" => $request->department_id,
                "name" => $request->name,
                "phone" => $request->phone,
                "email" => $request->email,
                "address" => $request->address,
                "password" => Hash::make($request->password),
                "create_by" => $request->create_by,
            ]);
            $userCreate->roles()->attach($request->role);
            DB::commit();
            return redirect()->route('user.index')
                ->with('success', 'User created successfully.');
        } catch (\Exception $exception) {
            DB::rollBack();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $data = [
            'user'         => $user,
        ];
        return view('user.show')->with($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = $this->role->all();
        $user = $this->user->findOrFail($id);
        $listRoleOfUser = DB::table('role_user')->where('user_id', $id)->pluck('role_id');
        return view('user.edit', compact('roles', 'user', 'listRoleOfUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->user->where('id', $id)->update([
                "department_id" => $request->department_id,
                "name" => $request->name,
                "phone" => $request->phone,
                "email" => $request->email,
                "address" => $request->address,
                "password" => Hash::make($request->password),
                "created_by" => $request->create_by,
            ]);

            DB::table('role_user')->where('user_id', $id)->delete();
            $userCreate = $this->user->find($id);
            $userCreate->roles()->attach($request->roles);
            DB::commit();
            return redirect()->route('user.index')
                ->with('success', 'User updated successfully.');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $user = $this->user->find($id);
            $user->delete($id);
            DB::commit();
            $user->roles()->detach();
            return redirect()->route('user.index')
                ->with('success', 'User created successfully.');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }
}
