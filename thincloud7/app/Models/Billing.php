<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $table = 'billing';

    protected $fillable = [
        'user_id',
        'username',
        'email',
        'password',
        'name',
        'surname',
        'toll_address',
        'toll_number',
        'address',
        'city',
        'district',
        'zip_code',
        'phone_number',
        'email',
        // 'credit_card_type',
        // 'credit_card_number',
        // 'credit_card_cvv',
        // 'credit_card_expiration_date',
        // 'coupon_code',
         'created_date',
         'updated_date',
         'deleted_date',
        // //'feather1_icon',
        // 'feather1_title',
        // 'feather1_content',
        // //'feather2_icon',
        // 'feather2_title',
        // 'feather2_content',
        // //'feather3_icon',
        // 'feather3_title',
        // 'feather3_content',
        // //'feather4_icon',
        // 'feather4_title',
        // 'feather4_content',
    ];
}
