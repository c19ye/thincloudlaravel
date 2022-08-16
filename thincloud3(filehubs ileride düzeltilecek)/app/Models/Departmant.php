<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departmant extends Model
{
    use HasFactory;

    protected $table = 'departmant';

    public function filehubs(){
        return $this->belongsTo(FileHubs::class);
    }
}
