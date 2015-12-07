<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
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
        return $this->belongsTo('Author');
    }
    
    public function user()
    {
        return $this->belongsTo('User');
    }
    
    public function quotes()
    {
        return $this->hasMany('Quote');
    }
}
