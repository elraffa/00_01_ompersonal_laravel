<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function create(): Response
    {
        $roles = Role::all();

        return Inertia::render('Users/Create_Edit', [
            'roles' => $roles
        ]);
    }

    public function index()
    {
        $user = auth()->user();
        return Inertia::render('Users/Index', [
            'users' => User::paginate(5)->through(fn ($user) => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'created_at' => $user->created_at,
            ]),
            'user' => [
                'role' => $user->getRoleNames()->first()
            ]
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'exclude_word:empty'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole($request->role);

        return redirect(RouteServiceProvider::USERS);
    }

    public function storeMember(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('member');

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::DASHBOARD);
    }


    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'exclude_word:empty']
        ]);

        $validated['password'] = Hash::make($user->password);

        if (isset($request->role)) {
            $user->syncRoles([]);
            $user->assignRole($request->role);
        }

        $user->update($validated);


        return redirect(RouteServiceProvider::USERS);
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return Inertia::render('Users/Create_Edit', [
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->roles->toArray()
            ],
            'roles' => $roles
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect(RouteServiceProvider::USERS);
    }
}
