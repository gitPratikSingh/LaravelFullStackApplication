<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function iscompleted(){
        return static::where('iscompleted', '=', true)->get();
    }

    public function scopeincomplete($query){
        return $query->where('iscompleted', 0)->get();
    }
}
