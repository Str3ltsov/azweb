<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $table = 'contact_forms';

    protected $fillable = [
        'name',
        'email',
        'topic',
        'description',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'topic' => 'string',
        'description' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}