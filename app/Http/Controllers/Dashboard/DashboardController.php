<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $book;
    private $author;
    private $user;

    public function __construct(){
        $this->book = Book::class;
        $this->author = Author::class;
        $this->user = User::class;
    }

    public function home(){
        $countBooks = $this->book::count();
        $countAuthors = $this->author::count();
        $countUsers = $this->user::count();
        $books = $this->book::where('estado', '=', 1)->paginate(10);
        return view('dashboard.index')
                ->with([
                    'countBooks' => $countBooks,
                    'countAuthors' => $countAuthors,
                    'countUsers' => $countUsers,
                    'books' => $books,
                ]);
    }
}
