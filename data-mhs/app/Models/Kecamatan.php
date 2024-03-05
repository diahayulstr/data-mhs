<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    public function prov()
    {
        return $this->belongsTo('App\Models\Provinsi');
    }
    
    public function kab()
    {
        return $this->belongsTo('App\Models\Kabupaten');
    }
}
