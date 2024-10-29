<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Event extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'event_date',
        'event_time',
        'organizer',
        'location',
        'email',
        'phone',
        'website',
        'sponsor',
        'event_speaker',
        'photo',
        'tags',
        'event_cat_id',
        'status',
        'created_by',
        'updated_by',
    ];
}
