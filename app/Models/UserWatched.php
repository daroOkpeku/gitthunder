<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWatched extends Model
{
    use HasFactory;

    protected $fillable =[
     'user_id',
     'videoid',
     'course_id',
      'episode',
      'videoduration',
     'videocurrenttime'
    ];
}
