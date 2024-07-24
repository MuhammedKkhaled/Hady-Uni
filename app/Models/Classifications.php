<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Classifications extends Model
{

    use HasFactory;

    protected $fillable = [
        'webometrics',
        'greenmetrics',
        'scival',
        'scopus',
    ];

    protected $appends = [
        'webometrics_path',
        'greenmetrics_path',
        'scival_path',
        'scopus_path',
    ];


    public function getWebometricsPathAttribute()
    {
        return Storage::url('uploads/classifications/' . $this->file);
    }
    public function getGreenmetricsPathAttribute()
    {
        return Storage::url('uploads/classifications/' . $this->file);
    }
    public function getScivalPathAttribute()
    {
        return Storage::url('uploads/classifications/' . $this->file);
    }
    public function getScopusPathAttribute()
    {
        return Storage::url('uploads/classifications/' . $this->file);
    } 
}
