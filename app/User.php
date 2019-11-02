<?php

namespace App;

use Carbon\Carbon;
use App\Attendance;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use App\Traits\ResponseMacroUserDestroyTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,
        ResponseMacroUserDestroyTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userable_id',
        'userable_type',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that appends.
     *
     * @var array
     */
    protected $appends = [
        'userable_type_text',
    ];

    /**
     * Get the employee name.
     *
     * @return string
     */
    public function getUserableTypeTextAttribute()
    {
        return str_replace('_', ' ', $this->userable_type);
    }

    /**
     * Get all of the owning commentable models.
     */
    public function userable()
    {
        return $this->morphTo();
    }

    /**
     * Get the loginLogs with user.
     */
    public function loginLogs()
    {
        return $this->hasMany('App\LoginLog');
    }
}
