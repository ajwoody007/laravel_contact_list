<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    // explicitly tell laravel which fields can be used. every field not in fillable is automatically guarded.

    protected $fillable = ['name', 'email', 'mobile'];
    // protected $guarded = ['id'];

    // public function getRouteKeyName() {
    //     return 'slug';
    // }

}
