<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnchangeRate extends Model
{
    protected $table = 'enchange_rates';

    protected $fillable = [
        'to',
        'from',
        'user_id'
    ];
}
