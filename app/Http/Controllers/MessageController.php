<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

use App\Http\Requests\CreateMessageRequest;
use App\Models\Message;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        return view("create");
    }

    public function store(CreateMessageRequest $request)
    {
        Message::create($request->all());
        return "succes";
    }
}
