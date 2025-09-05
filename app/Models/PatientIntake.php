<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientIntake extends Model
{
    protected $fillable = [
        'type','status','patient_id',
        'first_name','last_name','dob','phone','email',
        'address_line1','address_line2','city','postcode',
        'nhs_number','current_pharmacy','notes',
        'consent_signed','attachments','assessment'
    ];

    protected $casts = [
        'dob' => 'date',
        'consent_signed' => 'boolean',
        'attachments' => 'array',
        'assessment' => 'array',
    ];
}
