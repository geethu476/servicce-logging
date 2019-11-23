<?php

namespace App;

use App\Traits\CreaterTrait;
use App\Traits\AvatarUrlTrait;
use App\Traits\ReferenceNoTrait;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ResponseMacroDestroyTrait;

class Product extends Model
{
    use CreaterTrait,
        AvatarUrlTrait,
        ReferenceNoTrait,
        ResponseMacroDestroyTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'serial_no',
        'item',
        'brand',
        'model',
    ];
    
}
