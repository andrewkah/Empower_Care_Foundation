<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $guard_name = 'web';
    protected $hidden = [
        'guard_name'
    ];
}