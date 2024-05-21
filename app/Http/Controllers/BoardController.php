<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController
{

    public function index()
    {
        return view('boards.index', [
            'boards' => auth()->user()->boards
        ]);
    }


    public function create()
    {
        return view('boards.create');
    }


    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required|max:255',
        ]);

        $formFields['user_id'] = auth()->user()->id;

        Board::create($formFields);

        return redirect('/');
    }


    public function show(Board $board)
    {
        //
    }


    public function edit($id)
    {
        $board = Board::find($id);
        if ($board->user_id != auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('boards.edit', [
            'board' => $board
        ]);
    }


    public function update(Request $request, Board $id)
    {
        $board = Board::find($id);

        if ($board->user_id != auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $formFields = $request->validate([
            'title' => 'required|max:255',
        ]);

        $board->update($formFields);

        return redirect('boards/' . $board->id);
    }


    public function destroy(Board $id)
    {
        $board = Board::find($id);

        if ($board->user_id != auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $board->delete();

        return redirect('/boards');
    }
}
