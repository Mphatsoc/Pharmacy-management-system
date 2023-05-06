<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quantity extends Model
{
    use HasFactory;
    public $timestamps = false;

    //relationship between the model and the data to be deleted.
    public function quantity()
    {
    return $this->belongsTo(Quantity::class);
    }

    
}
