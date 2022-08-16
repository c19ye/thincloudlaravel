<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileHubs extends Model
{
    use HasFactory;

    protected $table = 'filehubs';
    protected $guarded = [];


    protected $fillable = [
        'used_id',
        'name',
        'departman_id',
        'storage_size',
        'used_storage',
        'backup_time',
        'permission',
        'virtualmachine_id',
        'location'
    ];

    public function virtualmachine(){
        return $this->hasOne(Virtualmachine::class);
    }

    public function departmant(){
        return $this->hasOne(Departmant::class);
    }


    
}
