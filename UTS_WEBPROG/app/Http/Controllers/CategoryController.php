<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\BookCategory;

class CategoryController extends Controller
{
    public function getBooksByCategory($category) {
        $CurrentCategory = Category::find($category);
        $BooksCategory = BookCategory::where('category_id',$category)->get();

        $categories = Category::all();
        return view('Bookcategory', compact('BooksCategory','CurrentCategory', 'categories'));
    }
}
