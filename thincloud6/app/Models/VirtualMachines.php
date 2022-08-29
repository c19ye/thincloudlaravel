<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualMachines extends Model
{
    use HasFactory;

    protected $table = 'virtual_machines';

    protected $fillable = [
        'user_id',
        'status',
        'thincloudname',
        'thincloudid',
        'name',
        'surname',
        'username',
        'location',
        'password',
        'email',
        'avatar',
        'status',
        'role_id',
        'billing',
        'department_id',
        'my_plans_id',
        'operating_system_id',
        'department_id',
        'backup_id',
        'auto_shutdown',
        'auto_turnon',
        'critical_notification',
        "started_date",
        "end_date",
    ];
}
