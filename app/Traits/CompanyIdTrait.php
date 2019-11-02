<?php

namespace App\Traits;

trait CompanyIdTrait
{
    /**
     * Bootstrap trait.
     *
     * @return void
     */
    public static function bootCompanyIdTrait()
    {
        static::creating(function ($model) {
            $model->company_id = auth()->user()->userable->company_id;
        });
    }
}
