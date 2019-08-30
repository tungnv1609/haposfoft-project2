<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\CreateUserRequest;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Config;
use Symfony\Component\Debug\FatalErrorHandler\UndefinedFunctionFatalErrorHandler;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    private $role;
    private $permission;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Role $role,Permission $permission)
    {
        $this->role = $role;
        $this->permission = $permission;

    }

    public function index()
    {
        $roles = Role::paginate(5);
        return view('admin.role.index', ['list_role' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = $this->permission->all();
        return view('admin.role.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoleRequest $request)
    {
        try {
            DB::beginTransaction();
            $roleCreate = $this->role->create([
                "name" => $request->name,
                "note" => $request->note,
            ]);
            $roleCreate->permissions()->attach($request->permission);
            DB::commit();
            return redirect()->route('role.index')
                ->with('success', 'Role created successfully.');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissions = $this->permission->all();
        $role = $this->role->findOrFail($id);
        $getAllPermissionOfRole= DB::table('permission_role')->where('role_id', $id)->pluck('permission_id');
        return view('admin.role.edit', compact('role', 'permissions','getAllPermissionOfRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRoleRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->role->where('id', $id)->update([
                "name" => $request->name,
                "note" => $request->note,
            ]);
            DB::table('permission_role')->where('role_id', $id)->delete();
            $roleCreate = $this->role->find($id);
            $roleCreate->permissions()->attach($request->permission);
            DB::commit();
            return redirect()->route('role.index')
                ->with('success', 'Role updated successfully.');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $role = $this->role->find($id);
            $role->delete($id);
            DB::commit();
            $role->permissions()->detach();
            return redirect()->route('role.index')
                ->with('success', 'Deleted successfully.');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }
}
