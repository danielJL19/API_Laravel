<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    //1-formar relaciones muchos a muchos 
    public function clients(){
        return $this->belongsToMany(Client::class);
    }
}
