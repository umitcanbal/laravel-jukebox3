<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class PageController extends Controller
{
    public function index() {
        return view("index");
    }

    public function show() {
        $authors = Author::orderBy('id', 'desc')->get();
        return view("list", compact("authors"));
    }

    public function create() {
        
        $author = new Author;
        return view("create", compact("author"));
    }

    public function store(Request $request) {
        
        $author = new Author;
        $author->name = $request->input("authorname");
        $author->save();
        return redirect("author/{$author->id}/edit");
    }

    public function edit($id_variable) {
        $author = Author::findOrFail($id_variable);
        return view("create", compact("author"));
    }

    public function update(Request $request, $id) {
        $author = Author::findOrFail($id);
        $author->name = $request->input("authorname");
        $author->save();
        return redirect("author/{$author->id}/edit");
    }

    public function delete($id) {
        $author = Author::findOrFail($id);
        $author->delete();
        $author = new Author;
        return redirect("/list");
    }
}

