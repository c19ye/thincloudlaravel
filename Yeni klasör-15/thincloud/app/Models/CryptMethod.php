<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptMethod extends Model
{
    use HasFactory;

    protected $table = 'crypt_methods';

    protected $fillable = [
        'name',
    ];
}
