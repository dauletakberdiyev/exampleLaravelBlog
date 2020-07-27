<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsertDB extends Model
{
    //
    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = [
        'title', 'body'
    ];
}
