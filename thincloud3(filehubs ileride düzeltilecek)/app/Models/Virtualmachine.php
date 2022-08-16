<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virtualmachine extends Model
{
    use HasFactory;

    protected $table = 'virtualmachine';

    public function filehubs(){
        return $this->belongsTo(FileHubs::class);
    }
}
