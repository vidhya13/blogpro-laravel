<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    //
    protected $table = 'tenfams';
	protected $fillable = [
	'name','gender','age','relation'
	];
}
