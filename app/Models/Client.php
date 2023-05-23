<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    //1-formar relaciones muchos a muchos 
    public function services(){
        return $this->belongsToMany(Service::class);
    }
}
