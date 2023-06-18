<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiImage extends Model
{
    use HasFactory;

    protected  $fillable = [
      'propertiId',
      'imageName'
    ];


}
