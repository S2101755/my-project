<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForRent extends Model
{
    protected $table = 'forrent';
    protected $fillable = ['propertyName', 'propertyOwner', 'amenities', 'sqfeet', 'description', 'price'];
}
