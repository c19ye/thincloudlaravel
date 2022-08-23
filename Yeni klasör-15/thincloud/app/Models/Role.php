<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'name',
        'user_id',
        'user_read',
        'user_write',
        'user_create',
        'content_read',
        'content_write',
        'content_create',
        'disputes_read',
        'disputes_write',
        'disputes_create',
        'database_read',
        'database_write',
        'database_create',
        'financial_read',
        'financial_write',
        'financial_create',
        'reporting_read',
        'reporting_write',
        'reporting_create',
        'apicontrol_read',
        'apicontrol_write',
        'apicontrol_create',
        'repository_read',
        'repository_write',
        'repository_create',

    ];
}
