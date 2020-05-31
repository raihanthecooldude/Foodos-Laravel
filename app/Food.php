<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
	protected $primaryKey = 'fid';
	public $timestamps = false;
}
