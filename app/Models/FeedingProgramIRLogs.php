<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\IndividualRecord;
use App\Models\FeedingProgram;

class FeedingProgramIRLogs extends Model
{


    use HasFactory, SoftDeletes;

    // FILLABLES
    protected $fillable = [
        'individual_record_id',
        'feeding_program_id',
    ];

    // DATES
    protected $dates = ['deleted_at'];

    // RELATIONSHIP
    public function feeding_programs()
    {
        return $this->belongsTo(FeedingProgram::class, 'feeding_program_id');
    }

    public function individual_records()
    {
        return $this->belongsTo(IndividualRecord::class, 'individual_record_id');
    }


    // AUTO LOADING RELATIONSHIP
    protected $with = ["feeding_programs", "individual_records"];
}
