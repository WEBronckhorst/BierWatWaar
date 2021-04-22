<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug'; // db column name
    }
    public function events()
    {
        return $this->hasMany('App\Models\Events', 'organizations_id');
    }
}
