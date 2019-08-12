<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD
    public function Category(){
=======
    public function Category() {
>>>>>>> 2db4d329c5279569a69d6f4c44f1034a8f17d5c9
        return $this->hasOne('App\Category');
    }
}
