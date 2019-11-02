<?php

namespace App;

use App\Traits\CreaterTrait;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ResponseMacroDestroyTrait;

class Department extends Model
{
        use CreaterTrait,
        ResponseMacroDestroyTrait;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];
}
