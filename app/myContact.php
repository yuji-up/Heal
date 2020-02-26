<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myContact extends Model
{
    protected $table = 'my_contact';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'message'       
    ];
}
