<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Providers\RouteServiceProvider;

class MessageController extends Controller

{
    public function index()
    {
        $messages = Message::all();

        return response()->json($messages);
    }

    public function show($id)
    {
        $message = Message::find($id);

       return response()->json($message);
    }

    public function create()
    {
        return view('messages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);
               
        $message = new Message();
        $message->content = $request->input('content');
        $message->save();

        // Redirect or return a response
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'content' => 'required',
        ]);

        $message = Message::find($id);
        $message->content = $request->input('content');
        $message->save();

        // Redirect or return a response
    }
}
