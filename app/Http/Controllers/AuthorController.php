<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Author;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\AuthorRepository;

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

        Author::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'bio' => $request->bio,
        ]);

        return redirect('/authors');
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

        return redirect('/authors');
    }
}
