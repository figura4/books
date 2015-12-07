<?php
namespace App\Repositories;
use App\Genre;
class GenreRepository
{
    /**
     * Get all of the genres
     *
     * @return Collection
     */
    public function getAll()
    {
        return Genre::all();
    }
}
