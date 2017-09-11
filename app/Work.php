<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;	

class Work extends Model
{
    public function artist() {

    	return $this->belongsTo(Artist::class);

    }

    // public function store($name = null, $id = null, $slug = null) {

    // 		// $work = new \App\Work;
    // 		// $artist = new \App\Artist;

	   //      // $work->name = '$name'.$i;
	   //      // $work->id = 660 + $i;
	   //      // $work->slug = '$slug'.$i;

	   //      // $work->save();

	   //      // $work_artist = DB::table('works')
    //      //    ->join('artists', 'works.artist_id', '=', 'artists.id')
    //      //    ->update(['works.artist_name' => NULL]);

        

    //     // echo 'ok';
    // }
}
