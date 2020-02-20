<?php

namespace App;

use App\Tenancy\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use TenantModels;

    protected $fillable = ['name', 'company_id', 'company_id'];
}
