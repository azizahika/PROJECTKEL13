<?php

// database/migrations/2023_07_20_123456_create_threads_table.php

// app/Http/Controllers/ThreadController.php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Reply;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index()
    {
        $threads = Thread::with('replies')->latest()->get();
        return view('threads.index', compact('threads'));
    }

    public function store(Request $request)
    {
        $thread = Thread::create($request->only('content'));
        return redirect()->back();
    }

    public function storeReply(Request $request, Thread $thread)
    {
        $reply = new Reply($request->only('content'));
        $thread->replies()->save($reply);
        return redirect()->back();
    }
}
