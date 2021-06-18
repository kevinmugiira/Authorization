<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index()
    {
        return view('conversation.index',[
            'conversation' => Conversation::all()
        ]);
    }

    public function show(Conversation $conversation)
    {
        return view('conversation.show',[
            'conversation' => $conversation
        ]);
    }
}
