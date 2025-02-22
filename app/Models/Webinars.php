<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinars extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'event_date', 'webinar_key'];
}
