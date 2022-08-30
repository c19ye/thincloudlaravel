<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeleteBackup extends Model
{
    use HasFactory;

    protected $table = 'delete_backups';

    protected $fillable = [
        'name',
    ];
}
