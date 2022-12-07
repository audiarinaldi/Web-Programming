<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class HomeController extends Controller
{
    public function getAllBooks() {
        $books = Book::simplePaginate(5);
        $categories = Category::all();

        return view('Home', compact('books', 'categories'));
    }

    public function Contact() {
        $categories = Category::all();
        return view('Contact', compact('categories'));
    }
}
