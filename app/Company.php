<?php

namespace App;

use App\Tenancy\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use TenantModels;

    protected $fillable = ['name'];
}
