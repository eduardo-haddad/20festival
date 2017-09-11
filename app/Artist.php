<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function works() {

    	return $this->hasMany(Work::class);

    }

    // public function store($name = null, $id = null, $slug = null) {

    // 		$artist = new \App\Artist;

	   //      $artist->name = '$name'.$i;
	   //      $artist->id = 660 + $i;
	   //      $artist->slug = '$slug'.$i;

	   //      $artist->save();

        

    //     echo 'saved';
    // }

    
}
