<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'medicine_name',
        'quantity_on_hand',
        // Add more columns if needed
    ];
    
}
