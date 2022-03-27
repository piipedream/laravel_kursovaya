<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createRequestRequest;
use App\Models\createRequest;
use App\Models\ApplicationType;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\ErrorHandler\Debug;
use Illuminate\Support\Facades\Log;

class AddBookController extends Controller
{
  public function AddBook(AddBookRequest $req){
    $AddBook = new AddBook();
    $AddBook->title = $req->input('title');
    $AddBook->author = $req->input('author');
    $AddBook->description = $req->input('description');
    $AddBook->genre = $req->input('genre');
    $AddBook->country = $req->input('country');
    $AddBook->pages = $req->input('pages');
    $AddBook->price = $req->input('price');
    if($req->file('image') != null) {
      $AddBook->image = substr($req->file('image')->store('public/image') , 13);
    }
    $AddBook->save();

    return redirect()->route('user.userpage')->with('success', 'Книга была добавлена');
  }


}
