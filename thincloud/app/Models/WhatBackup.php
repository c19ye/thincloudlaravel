<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatBackup extends Model
{
    use HasFactory;

    protected $table = 'what_backups';

    protected $fillable = [
        'name',
    ];
}
