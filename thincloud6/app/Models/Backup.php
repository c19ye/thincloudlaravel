<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backup extends Model
{
    use HasFactory;

    protected $table = 'backups';

    protected $fillable = [
        'user_id',
        'backup_number',
        'virtual_machine_id',
        'backup_frequency',
        'backup_technology',
        'crypt_method',
        'what_backup',
        'backup_location',
        'delete_backup',
        'size',
    ];
}
