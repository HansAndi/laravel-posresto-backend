<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $users = User::paginate(10);
        $users = DB::table('users')
        ->when($request->input('name'), function ($query, $name) {
            return $query->where('name', 'like', "%$name%");
        })
        ->latest()
        ->paginate(10);

        return view('pages.users.index', compact('users'));
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::findorFail($id);

        return view('pages.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
