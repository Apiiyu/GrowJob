<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    protected $guarded = [];

    public function getRouteKeyName(){
        return 'slug';
    }

    use HasFactory;
}
