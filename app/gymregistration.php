<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gymregistration extends Model
{
    protected $table = 'gymregistration';
    protected $fillable = [ 'id','name','address','mobileno'];
    protected $primaryKey='id';

}
