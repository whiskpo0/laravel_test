<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cats extends Model
{
    // public function isCompleted()
    // {
    //     return false; 
    // }

    // STATIC FUNCTION CALL
    // public static function Incomplete()
    // {
    //     return static::where('completed', 0)->get();     
    // }
    // Query Scope FUNCTION CALL
    public function scopeIncomplete($query)
    {
        return $query->where('id' < 4);     
    }

    public function foo()
    {

    }

    protected function name()
    {
        return 'test';
    }
}
