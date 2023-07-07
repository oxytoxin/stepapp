<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Proposal extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $casts = [
        'members' => 'array'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')
            ->singleFile();
        $this->addMediaCollection('proposal')
            ->singleFile();
    }
}
