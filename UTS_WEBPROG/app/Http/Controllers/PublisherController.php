<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;
use App\Models\Category;
use App\Models\Book;
class PublisherController extends Controller
{
    public function getAllPublisher() {
        $publisher = Publisher::all();
        $categories = Category::all();

        return view('Publisher', compact('publisher', 'categories'));
    }


    public function getDetail($publish) {
        $CurrentPublisher = Publisher::find($publish);
        $PublisherBooks = Book::where('publisher_id',$publish)->get();

        $categories = Category::all();

        return view('PublisherDetail', compact('CurrentPublisher','PublisherBooks' ,'categories'));
    }
}
