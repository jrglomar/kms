<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{

    use HasFactory, SoftDeletes;

    // FILLABLES
    protected $fillable = [
        'title',
        'description',
    ];

    // DATES
    protected $dates = ['deleted_at'];

    // RELATIONSHIP
    public function users()
    {
        return $this->hasMany(User::class, 'role_id')->without('roles');
    }


    // AUTO LOADING RELATIONSHIP
    protected $with = ["users"];
}
