<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Config;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index ()
    {
        $users = User::paginate(9);
        return view('admin.user.list',['list_user'=>$users]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create ()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {

        $path = null;
        $input = $request->except('avatar');
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('images', ['disk' => 'public']);
            $input['avatar'] = $path;

        }
        User::create($input);
//        $request->validated();
//        $path= $request->file('myFile')->store('images');
//        $user = User::create($request->all());
//        dd($user);
//        $user = new User();
//        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->phone = $request->phone;
//        $user->dob = $request->dob;
//        $user->password = $request->password;

//        $user->avatar = $request->avatar;


//        $user->save();

        return redirect()->route('admin.user.list')
            ->with('success', 'User created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */

    public function edit (User $user)
    {
        return view('admin.user.edit', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */

    public function update (CreateUserRequest $request, User $user)
    {
        $request->validated();


        $user->update($request->all());
        return redirect()->route('admin.user.list')
            ->with('success', 'User update successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */

    public function destroy (User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.list')
            ->with('success', 'User deleted successfully');
    }

}
