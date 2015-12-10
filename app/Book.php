<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Author;
class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['italian_title', 'italian_subtitle', 'original_title', 'original_subtitle', 'review', 'pub_date', 'pages', 'editor', 'cover', 'pub_year'];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function quotes()
    {
        return $this->hasMany('App\Quote');
    }
    
    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }
}
