<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    //field yang boleh dicrud
    protected $fillable = ['nama', 'description', 'price', 'image_url'];

    //yang gaboleh di crud sendiri/dilindungi
    // protected $guarded = ['id'];
}
