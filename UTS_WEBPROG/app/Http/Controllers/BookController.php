<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function getDetail($book) {
        $details = Book::find($book);
        $categories = Category::all();

        return view('BookDetail', compact('details', 'categories'));
    }
}
