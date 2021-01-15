<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Short extends Model
{
    protected $fillable = [
        'expertise_id','value','short_code','description'
      ];
}
