<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model


{

    public $timestamps = false;
    protected $fillable = ['title', 'director', 'image_url', 'duration', 'release_date','genre'];
    use HasFactory;

  
        public static function search($title)
        {
            if ($title !== null && $title !== '') {
                return self::where('title', 'like', '%' . $title . '%')->get();
            }
        
            return self::all();
        }
    }

