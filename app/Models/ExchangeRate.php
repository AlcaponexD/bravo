<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    protected $table = 'exchange_rates';

    protected $fillable = [
        'to',
        'from',
        'user_id',
        'value'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'user_id'
    ];
}
