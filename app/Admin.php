<?php

namespace App;

use App\Traits\MakeNameTrait;
use App\Traits\AvatarUrlTrait;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use MakeNameTrait,
        AvatarUrlTrait;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'blood_group',
        'gender',
        'primary_phone',
        'secondary_phone',
        'address',
        'city',
        'state',
        'country',
        'avatar',
    ];

    /**
     * The attributes that appends.
     *
     * @var array
     */
    protected $appends = [
        'name',
        'avatar_url',
    ];

    /**
     * Get the user for the admin.
     */
    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
}
