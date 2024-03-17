<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file',
        'published_at',
    ];

    protected $casts = [
        'published_at'=>'date',
    ];

    protected $appends = ['file_path'];

    public function getFilePathAttribute(): string
    {
        return Storage::url('uploads/journals/' . $this->file);
    }

}
