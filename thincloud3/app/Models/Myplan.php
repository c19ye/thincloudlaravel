<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myplan extends Model
{
    use HasFactory;
    protected $table = 'my_plans';
    protected $fillable =[
        'name',
        //'image',
        //'period',
        'price',
        'features1',
        'features2',
        'features3',
        'features4',
        'features5',
        'features6',
        'features7',
        'features8',
        'start_date',
        'end_date',
        'virtual_machine_id',
        'updated_date',
        'deleted_date'
    ];
}
