<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fee extends Model
{
    protected $table = 'fees';
    protected $fillable = [ 'user_id','fees'];
    protected $primaryKey='id';

    public function gymregistrations()
    {
    return $this->belongsTo(gymregistration::class,'user_id');
   }
}
