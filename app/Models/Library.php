<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Library extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ar',
        'file',
        'specialization_name_en',
        'specialization_name_ar',
        'publisher_en',
        'publisher_ar',
        'published_at',
    ];

    protected $casts = [
        'published_at'=>'date',
    ];

    protected $appends = ['file_path'];

    public function getFilePathAttribute(): string
    {
        return Storage::url('uploads/libraries/' . $this->file);
    }

    public function category():BelongsTo
    {
        return  $this->belongsTo(Category::class, 'category_id');
    }
}
