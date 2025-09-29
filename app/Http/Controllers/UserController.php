<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $admins = User::query()->where('is_admin', true)->where('is_super_admin', false)->get();
        return view('admin.admins.index', compact('admins'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'is_admin' => true,
            'is_super_admin' => false,
        ]);

        return redirect()->route('admin.admins.index')->with('success', 'Admin created');
    }

    public function edit(User $user)
    {
        if ($user->is_super_admin) {
            abort(403);
        }
        return view('admin.admins.edit', compact('user'));
    }

    public function destroy(User $user)
    {
        if ($user->is_super_admin) {
            abort(403);
        }
        $user->delete();
        return redirect()->route('admin.admins.index')->with('success', 'Admin deleted');
    }

    public function update(Request $request, User $user)
    {
        if ($user->is_super_admin) {
            abort(403);
        }
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
        ];
        if (!empty($validated['password'])) {
            $data['password'] = bcrypt($validated['password']);
        }
        $user->update($data);
        return redirect()->route('admin.admins.index')->with('success', 'Admin updated');
    }
}
