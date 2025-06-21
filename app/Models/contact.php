<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Email;
use Symfony\Component\Console\Input\Input;

class contact extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];


    
}
