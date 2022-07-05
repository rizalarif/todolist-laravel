<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function index()
    {
        $todolist = Todolist::all();
        return view('home', compact('todolist'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);

        Todolist::create($data);
        return back();
    }

    public function destroy(Todolist $todolist)
    {
        $todolist -> delete();
        return back();
    }
}
