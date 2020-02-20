<?php


namespace App\Tenancy;


use App\Company;

class TenantManager
{
    private $tenant;

    /**
     * @return mixed
     */
    public function getTenant(): ?Company
    {
        return $this->tenant;
    }

    /**
     * @param Company $tenant
     */
    public function setTenant($tenant): void
    {
        $this->tenant = $tenant;
    }


}
