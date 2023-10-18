<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\FeedingProgramIRLogs;

class FeedingProgram extends Model
{
    use HasFactory, SoftDeletes;

    // FILLABLES
    protected $fillable = [
        'title',
        'location',
        'description',
        'time_of_program',
        'date_of_program',
        'date_posted',
        'status',
    ];

    // DATES
    protected $dates = ['deleted_at'];

    // RELATIONSHIP
    public function feeding_feeding_program_ir_logs()
    {
        return $this->hasMany(FeedingProgramIRLogs::class, 'feeding_program_id')->without('feeding_programs');
    }

    // AUTO LOADING RELATIONSHIP
    // protected $with = ["feeding_feeding_program_ir_logs"];
}
