<?php


namespace App\Tenancy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait TenantModels
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenancyScope());

        static::creating(function (Model $obj){
            $company = Tenant::getTenant();
            if($company){
                $obj->company_id = $company->id;
            }
        });


    }

}
