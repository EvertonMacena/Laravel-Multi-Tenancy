<?php


namespace App\Tenancy;


use Illuminate\Support\Facades\Facade;

class TenantFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TenantManager::class;
    }

}
