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
        
        return view("create");
        // return redirect("author/".$author->id."/edit");
    }
}

