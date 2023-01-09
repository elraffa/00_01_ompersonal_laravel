<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Inertia\Inertia;
use Illuminate\Http\Request;

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

    public function destroy($id)
    {
        
    }
}
