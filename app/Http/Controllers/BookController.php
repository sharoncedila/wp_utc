<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;

class BookController extends Controller
{
    public function homepage(){
        // $categories = Category::all();
        $books = Book::where('id', '!=', '-1')->paginate(10);
        $details = Detail::all();
        return view('homepage', ["books" => $books, "details" => $details]);
    }

    public function booklist($idx){
        $books = Book::where('category_id', $idx)->get();
        $category = Category::where('id', $idx)->first();
        return view('booklist', ["books" => $books, "category" => $category]);
    }

    public function bookdetail($idx){
        $book = Book::where('id', $idx)->first();
        return view('bookdetail', ["book" => $book]);
    }
}
