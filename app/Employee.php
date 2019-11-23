<?php

namespace App;

use Carbon\Carbon;
use App\Traits\CreaterTrait;
use App\Traits\MakeNameTrait;
use App\Traits\AvatarUrlTrait;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ResponseMacroDestroyTrait;

class Employee extends Model
{
     use CreaterTrait,
        MakeNameTrait,
        AvatarUrlTrait,
        ResponseMacroDestroyTrait;


        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'branch_id',
        'first_name',
        'middle_name',
        'last_name',
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
     * Get the branch.
     */
    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }

       /**
     * Get the user for the employee.
     */
    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }


}
