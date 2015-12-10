<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Quote extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['body', 'source', 'book_id'];
    
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
