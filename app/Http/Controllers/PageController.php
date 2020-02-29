<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class PageController extends Controller
{
    public function create() {
        $author = new Author;
        return view("create", compact("author"));
    }

    public function store(Request $request) {
        $author = new Author;
        
        $author->name = $request->input("authorname");
        // $author->name = $request->authorname;  // yukarıdakiyle aynı şeyi yapıyo
        
        $author->save();
        
        return view("verification", compact("author"));
        // return redirect("author/".$author->id."/edit");
    }

    public function delete($variable) {
        
        $author = Author::findOrFail($variable);
        $author->delete();
        $id = $author->id;
        $name = $author->name;
        $author = new Author;
        return view("delete", compact("id", "name", "author"));
    }

    public function edit($variable, Request $request) {
        $author = Author::findOrFail($variable);
        $author->name = $request->input("authorname");
        $author->save();
        return view("edit", compact("author"));
        // return redirect("/ali");
        
    }

}

