<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Organization;

class Events extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug'; // db column name
    }
    public function organizations()
    {
        return $this->hasOne(Organization::class,  'id', 'organization_id');
    }
}
