<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Study extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'zip_code',
        'city',
        'living',
        'nationality',
        'marital',
        'qualification',
        'enterprise',
        'languages',
        'department_id',
        'personal',
        'passport',
        'certificate',
        'cv',
        'certificate_1',
        'in_iraq',
        'message',
        "state",
        "note",
    ];
    protected $appends = [
        'personal_path',
        'passport_path',
        'certificate_path',
        'cv_path',
        'certificate_1_path',
    ];

    public function getPersonalPathAttribute()
    {
        return Storage::url('uploads/study/' . $this->file);
    }
    public function getPassportPathAttribute()
    {
        return Storage::url('uploads/study/' . $this->file);
    } // end of getPosterPathAttribute

    public function getCvPathAttribute()
    {
        return Storage::url('uploads/study/' . $this->file);
    } // 
    public function getCertificate1PathAttribute()
    {
        return Storage::url('uploads/study/' . $this->file);
    } // end of getPosterPathAttribute

    public function getCertificatePathAttribute()
    {
        return Storage::url('uploads/study/' . $this->file);
    } // 

    public function sustainable():BelongsTo
    {
        return $this->belongsTo(Department::class , 'department_id');
    }
}
