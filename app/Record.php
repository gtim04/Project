<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected function showRecords(){
    	$data = Record::select('firstname', 'lastname', 'contact_number')->get();
    	return $data;
    }
}