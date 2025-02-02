<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\CentreSante;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServiceSante extends Model
{
    use HasFactory;

protected $fillable = [
       'nom',
         'description',
            'cout',
    ];


}
