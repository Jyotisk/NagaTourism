<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_image'
    ];

    public function setFilenamesAttribute($value)
    {
        $this->attributes['event_image'] = json_encode($value);
    }
}
