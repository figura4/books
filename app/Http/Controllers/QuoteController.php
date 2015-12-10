<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Quote;
use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\QuoteRepository;
use App\Repositories\BookRepository;
use Log;
use Input;

class QuoteController extends Controller
{
   /**
     * The quote repository instance.
     *
     * @var QuoteRepository
     */
    protected $quotes;
    protected $books;
    /**
     * Create a new controller instance.
     *
     * @param  QuoteRepository  $quotes
     * @return void
     */
    public function __construct(QuoteRepository $quotes, BookRepository $books)
    {
        //$this->middleware('auth');
        $this->quotes = $quotes;
        $this->books = $books;
    }
    /**
     * Display a list of all of the quotes.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('quotes.index', [
            'quotes' => $this->quotes->getAll(),
        ]);
    }
    /**
     * Create new quote.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(Request $request)
    {
    	$book_list = Book::lists('italian_title', 'id');
        return view('quotes.createOrUpdate')->with('book_list', $book_list);
    }
    /**
     * Edit existing quote.
     *
     * @param  Request  $request
     * @param  Quote   $quote 
     * @return Response
     */
    public function edit(Request $request, Quote $quote)
    {
        $book_list = Book::lists('italian_title', 'id');
        return view('quotes.createOrUpdate')->with('quote', $quote)->with('book_list', $book_list);
    }
    /**
     * Create a new quote.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);
        $quote = new Quote($request->all());
        $quote->save();
        return redirect('/quote');
    }
    
    /**
     * Update existing quote.
     *
     * @param  Request  $request
     * @param  Quote   $quote 
     * @return Response
     */
    public function update(Request $request, Quote $quote)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);
        $input = array_except(Input::all(), '_method');
	    $quote->update($input);
	    
        return redirect('/quote');
    }
    /**
     * Destroy the given quote.
     *
     * @param  Request  $request
     * @param  Quote  $quote
     * @return Response
     */
    public function destroy(Request $request, Quote $quote)
    {
        $quote->delete();
        return redirect('/quote');
    }
}
