<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Exports\MembersExport;
use Spatie\Permission\Models\Role;
use Maatwebsite\Excel\Facades\Excel;
use App\Providers\RouteServiceProvider;

class MembersController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $auth_user = auth()->user();
        return Inertia::render('Members/Index', [
            'members' => Member::paginate(50)->through(fn ($member) => [
                'id' => $member->id,
                'name' => $member->name,
                'last_name' => $member->last_name,
                'email' => $member->email,
                'created_at' => $member->created_at,
            ]),
            'user' => [
                'role' => $user->getRoleNames()->first()
            ],
            'auth_user' => [
                'role' => $auth_user ? $auth_user->getRoleNames()->first() : ""
            ]
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy(Member $member)
    {
        $member->delete();

        return redirect(RouteServiceProvider::MEMBERS);
    }

    public function export()
    {
        ini_set('max_execution_time', 300);
        return Excel::download(new MembersExport, 'members.csv', \Maatwebsite\Excel\Excel::CSV);
    }
}
