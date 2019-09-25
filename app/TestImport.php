<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestImport extends Model
{
	public $timestamps = false;
    public  $table = "test_import";
      protected $fillable = [
        'name','email'
    ];

}
