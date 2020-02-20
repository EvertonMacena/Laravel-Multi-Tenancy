<?php

namespace App;

use App\Tenancy\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use TenantModels;

    protected $fillable = ['name', 'description', 'price', 'category_id', 'company_id'];
}
