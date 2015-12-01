<?php

namespace App\Repositories;

use App\Author;

class AuthorRepository
{
    /**
     * Get all of the authors
     *
     * @return Collection
     */
    public function getAll()
    {
        return Author::all();
    }
}