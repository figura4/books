<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Genre;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\GenreRepository;
class GenreController extends Controller
{
    /**
     * The genre repository instance.
     *
     * @var GenreRepository
     */
    protected $genres;
    /**
     * Create a new controller instance.
     *
     * @param  GenreRepository  $genres
     * @return void
     */
    public function __construct(GenreRepository $genres)
    {
        //$this->middleware('auth');
        $this->genres = $genres;
    }
    /**
     * Display a list of all of the genres.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('genres.index', [
            'genres' => $this->genres->getAll(),
        ]);
    }
}
