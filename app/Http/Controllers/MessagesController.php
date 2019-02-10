<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('id', 'Desc')->paginate(5);

        return view('backend/messages/index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate(Message::rules());

        try {
            $message = Message::create($request->all());

            Mail::to('wafflemagacin@gmail.com')->send( new ContactMessage($message));

            return response()->json('', 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 500);
        }
    }
}
