<?php

namespace App;

use App\Traits\CreaterTrait;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ResponseMacroDestroyTrait;

class Branch extends Model
{
     use CreaterTrait,
        ResponseMacroDestroyTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'location',
        'address',
        'city',
        'state',
        'country',
        'avatar',
        'latitude',
        'longitude',
    ];
}
