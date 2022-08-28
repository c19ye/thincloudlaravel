<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;

    protected $table = 'credit_card';

    protected $fillable = [
        'user_id',
        'card_number',
        'owner_name',
        'expire_day',
        'cvv',
    ];
}
