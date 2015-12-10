<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\BookRepository;
use Log;
use Input;

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
    /**
     * Create new book.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(Request $request)
    {
        return view('book.createOrUpdate');
    }
    /**
     * Edit existing book.
     *
     * @param  Request  $request
     * @param  Book   $book 
     * @return Response
     */
    public function edit(Request $request, Book $book)
    {
        return view('books.createOrUpdate')->with('book', $book);
    }
    /**
     * Create a new book.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'italian_title' => 'required',
        ]);
        $book = new Book($request->all());
        $book->save();
        return redirect('/book');
    }
    
    /**
     * Update existing book.
     *
     * @param  Request  $request
     * @param  Book   $book 
     * @return Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request, [
            'italian_title' => 'required',
        ]);
        $input = array_except(Input::all(), '_method');
	    $book->update($input);
	    
        return redirect('/book');
    }
    /**
     * Destroy the given book.
     *
     * @param  Request  $request
     * @param  Author  $author
     * @return Response
     */
    public function destroy(Request $request, Book $book)
    {
        $book->delete();
        return redirect('/book');
    }
}
