<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'age', 'village', 'subdistrict', 'regency', 'anamnese', 'checkup_result', 'therapy', 'action', 'visit_to', 'queue_number', 'examiner'];
}
