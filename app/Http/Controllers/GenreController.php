<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Genre;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\GenreRepository;
use Log;
use Input;

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
    /**
     * Create new genre.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(Request $request)
    {
        return view('genres.createOrUpdate');
    }
    /**
     * Edit existing genre.
     *
     * @param  Request  $request
     * @param  Genre   $genre 
     * @return Response
     */
    public function edit(Request $request, Genre $genre)
    {
        return view('genres.createOrUpdate')->with('genre', $genre);
    }
    /**
     * Create a new genre.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'last_name' => 'required|max:100',
        ]);
        $genre = new Genre($request->all());
        $genre->save();
        return redirect('/genre');
    }
    
    /**
     * Update existing genre.
     *
     * @param  Request  $request
     * @param  Genre   $genre 
     * @return Response
     */
    public function update(Request $request, Genre $genre)
    {
        $this->validate($request, [
            'last_name' => 'required|max:100',
        ]);
        $input = array_except(Input::all(), '_method');
	    $genre->update($input);
	    
        return redirect('/genre');
    }
    /**
     * Destroy the given genre.
     *
     * @param  Request  $request
     * @param  Genre  $genre
     * @return Response
     */
    public function destroy(Request $request, Genre $genre)
    {
        $author->delete();
        return redirect('/genre');
    }
}
