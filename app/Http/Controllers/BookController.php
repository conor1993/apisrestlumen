<?php
 
namespace App\Http\Controllers;
 
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
class BookController extends Controller{
 
 
    public function index(){
 
        $Books  = Book::all();
 
        return response()->json($Books);
 
    }
 
    public function getBook($id){
 
        $Book  = Book::find($id);
 
        return response()->json($Book);
    }
 
    public function createBook(Request $request){

        
        $Books = new Book;
        $Books->title = $request->input('title');
        $Books->author = $request->input('author');
        $Books->isbn = $request->input('isbn');
        $Books->save();
 
        return response()->json($Books);


 
    }
 
    public function deleteBook($id){
        $Book  = Book::find($id);
        $Book->delete();

        return response()->json('success');
    }
 
    public function updateBook(Request $request,$id){
        $Book  = Book::find($id);
        $Book->title = $request->input('title');
        $Book->author = $request->input('author');
        $Book->isbn = $request->input('isbn');
        $Book->save();
 
        return response()->json($Book);
    }


 
}