<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'category_id',
        'room_id', 
        'title',  
        'description'];
    public function room()
    {
    return $this->belongsTo(Room::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}