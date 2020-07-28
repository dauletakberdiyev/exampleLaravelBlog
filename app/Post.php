<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function deleteData($id){
        DB::table('posts')->where('id','=',$id)->delete();
    }
}
