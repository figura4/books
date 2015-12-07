<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\BookRepository;
class BookController extends Controller
{
    /**
     * The book repository instance.
     *
     * @var BookRepository
     */
    protected $books;
    /**
     * Create a new controller instance.
     *
     * @param  BookRepository  $books
     * @return void
     */
    public function __construct(BookRepository $books)
    {
        //$this->middleware('auth');
        $this->books = $books;
    }
    /**
     * Display a list of all of the books.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('books.index', [
            'books' => $this->books->getAll(),
        ]);
    }
}
