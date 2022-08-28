<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ports extends Model
{
    protected $table = 'ports';

    protected $fillable = [
        'network_name',
        'port_name',
        'port_state',
        'port_number'
    ];
}
