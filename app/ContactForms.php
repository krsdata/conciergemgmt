<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForms extends Model
{
    protected $casts = [
        'components' => 'array'
    ];
}
