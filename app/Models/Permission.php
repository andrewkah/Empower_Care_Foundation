<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    protected $guard_name = 'web';
    protected $hidden = [
        'guard_name'
    ];

    public function category()
    {
        return $this->belongsTo(PermissionCategory::class);
    }
}