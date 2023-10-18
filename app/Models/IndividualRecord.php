<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\FeedingProgramIRLogs;

class IndividualRecord extends Model
{

    use HasFactory, SoftDeletes;

    // FILLABLES
    protected $fillable = [
        'id_number',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'birthdate',
        'height',
        'weight',
        'bmi',
        'bmi_category',
        'status',
        'id_number',
    ];

    // DATES
    protected $dates = ['deleted_at'];

    // RELATIONSHIP
    public function feeding_program_ir_logs()
    {
        return $this->hasMany(FeedingProgramIRLogs::class, 'individual_record_id')->without('individual_records', 'feeding_programs');
    }

    // AUTO LOADING RELATIONSHIP
    // protected $with = ["feeding_program_ir_logs"];
}
