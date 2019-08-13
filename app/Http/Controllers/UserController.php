<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Config;

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
    public function store (CreateUserRequest $request)
    {
        $path = null;
        $input = $request->except('avatar');
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('images', ['disk' => 'public']);
            $input['avatar'] = $path;
        }
        User::create($input);
        return redirect()->route('user.index')
            ->with('success', 'User created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show (User $user)
    {
        $url_avatar = url('/') .'/storage/'. $user->avatar;
        $data = [
            'user' => $user,
            'url_avatar' => $url_avatar
        ];
        return view('admin.user.show', $data);
    }
    /**
     * Show the form for editing the specified resource.
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
    public function update (Request $request, User $user)
    {
//        $request->validate();
//        $user->update($request->all());
//        return redirect()->route('user.index')
//            ->with('success', 'User update successfully.');
        $path = null;
        $input = $request->except('avatar', '_method', '_token');
        $user = User::findOrFail($user->id);
        if ($request->hasFile('avatar')) {
            Storage::disk('public')->delete('/' . $user->avatar);
            $path = $request->avatar->store('images', ['disk' => 'public']);
            $input['avatar'] = $path;
        }
        $user->update($input);
        return redirect()->route('user.index')->with('message', __('messages.updated'));
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
        return redirect()->route('user.index')
            ->with('success', 'User deleted successfully');
    }
}
