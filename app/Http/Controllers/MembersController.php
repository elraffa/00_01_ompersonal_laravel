<?php

namespace App\Http\Controllers;

use App\Exports\MembersExport;
use Inertia\Inertia;
use App\Models\Member;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Providers\RouteServiceProvider;

class MembersController extends Controller
{
   
    public function index()
    {
        return Inertia::render('Members/Index', [
            'members' => Member::paginate(50)->through(fn ($member) => [
                'id' => $member->id,
                'name' => $member->name,
                'email' => $member->email,
                'created_at' => $member->created_at,
            ])
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
