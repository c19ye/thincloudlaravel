<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Firewall extends Model
{
    use HasFactory;
    protected $table = 'firewall';

    protected $fillable = [
        'user_id',
        'rule_name',
        'department_id',
        'state',
        'rule_actions',
        'url',
        'virtualmachine_id',
        'rule_validity',
        'policy_name',
        'domains',
        'policy_validity',
        'network_name',
        'port_name',
        'port_state',
        'port_number',
        'updated_date',
        'deleted_date'
    ];

    protected $casts = [
        'rule_actions' => 'array',
        'policy_actions' => 'array',
        'domains' => 'array'
    ];

    protected function rule_actions() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

    protected function policy_actions() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

    protected function domains() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
}
