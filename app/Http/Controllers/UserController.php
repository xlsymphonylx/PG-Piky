<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);
        return view('users.show', compact('user', 'roles'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required']
        ]);

        $user = User::create($request->all());
        $newRole = $request->role;
        $user->assignRole($newRole);

        return redirect()->route('users.index')
            ->with('success', 'The user has been created sucessfully!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($id), // Ignore the current user's email
            ],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'role' => ['required']
        ]);
        $newRole = $request['role'];

        $user = User::findOrFail($id);
        if ($request->filled('name')) {
            $user->name = $request->name;
        }

        if ($request->filled('email')) {
            $user->email = $request->email;
        }

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        $currentRole = $user->getFirstRoleName();

        if ($currentRole != $newRole) {
            if ($currentRole) $user->removeRole($currentRole);
            $user->assignRole($newRole);
        }

        return redirect()->route('users.index')
            ->with('success', 'The user has been updated sucessfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'The user has been deleted sucessfully!');
    }
}
