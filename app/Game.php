<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';
    protected $fillable = ['gamename','gameimg','gamelink','gameset'];
    
}
