<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{

    use HasFactory, SoftDeletes;

    // FILLABLES
    protected $fillable = [
        'title',
        'description',
    ];

    // DATES
    protected $dates = ['deleted_at'];
}
