<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackupLocation extends Model
{
    use HasFactory;

    protected $table = 'backup_locations';

    protected $fillable = [
        'name',
    ];
}
