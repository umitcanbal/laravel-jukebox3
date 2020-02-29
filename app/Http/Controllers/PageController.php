<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class PageController extends Controller
{
    public function create() {
       return view("create");
    }

    public function store(Request $request) {
        $author = new Author;
        
        $author->name = $request->authorname;
        
        $author->save();
        
        return view("verification", compact("author"));
        // return redirect("author/".$author->id."/edit");
    }

    // public function delete($id) {
    //     $author = Author::findOrFail($id);
    //     $author->delete();
    // }

    public function delete($variable) {
        
        $author = Author::findOrFail($variable);
        $author->delete();
        return view("delete", compact("author"));
    }

}

