<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $guarded = ['titel','inhoud'];
    protected $fillable = ['titel','inhoud','Einddatum'];
}
