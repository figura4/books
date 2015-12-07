<?php
namespace App\Repositories;
use App\Book;
class BookRepository
{
    /**
     * Get all of the books
     *
     * @return Collection
     */
    public function getAll()
    {
        return Book::all();
    }
}
