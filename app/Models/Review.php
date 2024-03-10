<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Movie;
class Review extends Model
{
    use HasFactory;
    protected $fillable=[
      "movie_id","user_id","day",
    ];
    public function getData(){
        return $this->hasOne(Movie::class,"id","movie_id");
    }
    public function usersname(){
        return $this->hasOne(User::class,"id","user_id");
    }
}
