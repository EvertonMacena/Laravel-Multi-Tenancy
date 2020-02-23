<?php


namespace App\Tenancy;

use App\Company;
use Illuminate\Database\Eloquent\Model;

trait TenantModels
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenancyScope());

        static::creating(function (Model $obj){
            $company = \Tenant::getTenant();
            if($company){
                $obj->company_id = $company->id;
            }
        });
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
