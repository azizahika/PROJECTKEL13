<?php


// app/Http/Controllers/ThreadController.php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index()
    {
        $threads = Thread::latest()->get();
        return view('thread', compact('threads'));
    }

    public function store(Request $request)
    {
        $thread = Thread::create($request->only('content'));
        return redirect()->back();
    }
    public function destroy(Thread $thread)
    {
        $thread->delete();
        return redirect()->back();
    }
}

