<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Rule extends Model
{
    //
    protected $fillable = ['name'];

    public function users(){
        return $this->hasMany(User::class);
    }
    
}
