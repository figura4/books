<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Quote;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\QuoteRepository;
class QuoteController extends Controller
{
    /**
     * The quote repository instance.
     *
     * @var QuoteRepository
     */
    protected $quotes;
    /**
     * Create a new controller instance.
     *
     * @param  QuoteRepository  $quotes
     * @return void
     */
    public function __construct(QuoteRepository $quotes)
    {
        //$this->middleware('auth');
        $this->quotes = $quotes;
    }
    /**
     * Display a list of all of the books.
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
}
