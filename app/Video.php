<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

	//PAra saber a donde pertenece (ralacion)
	public static funtion videos($id){
		return Video::where('id_lista','=',$id)->get();
	}

    //
}
