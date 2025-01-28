<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Department extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'description',
        'address',
        'created_by',
        'updated_by',
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
