<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackupFrequency extends Model
{
    use HasFactory;

    protected $table = 'backup_frequencies';

    protected $fillable = [
        'name',
    ];
}
