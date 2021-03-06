<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Author;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\AuthorRepository;
use Log;
use Input;

class AuthorController extends Controller
{
    /**
     * The author repository instance.
     *
     * @var AuthorRepository
     */
    protected $authors;

    /**
     * Create a new controller instance.
     *
     * @param  AuthorRepository  $authors
     * @return void
     */
    public function __construct(AuthorRepository $authors)
    {
        //$this->middleware('auth');

        $this->authors = $authors;
    }

    /**
     * Display a list of all of the authors.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('authors.index', [
            'authors' => $this->authors->getAll(),
        ]);
    }

    /**
     * Create new author.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(Request $request)
    {
        return view('authors.createOrUpdate');
    }

    /**
     * Edit existing author.
     *
     * @param  Request  $request
     * @param  Author   $author 
     * @return Response
     */
    public function edit(Request $request, Author $author)
    {
        return view('authors.createOrUpdate')->with('author', $author);
    }

    /**
     * Create a new author.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'last_name' => 'required|max:100',
        ]);
        $author = new Author($request->all());
        $author->save();
        if ($request->session()->has('book_create_in_progress')) {
        	$request->session()->forget('book_create_in_progress');
        	return redirect('/book/create');
        } else {
        	return redirect('/author');
        }
    }
    
    /**
     * Update existing author.
     *
     * @param  Request  $request
     * @param  Author   $author 
     * @return Response
     */
    public function update(Request $request, Author $author)
    {
        $this->validate($request, [
            'last_name' => 'required|max:100',
        ]);

        $input = array_except(Input::all(), '_method');
	    $author->update($input);
	    
        return redirect('/author');
    }

    /**
     * Destroy the given author.
     *
     * @param  Request  $request
     * @param  Author  $author
     * @return Response
     */
    public function destroy(Request $request, Author $author)
    {
        $author->delete();

        return redirect('/author');
    }
}
