<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crawler extends Model
{
    public $table = 'web_text';
    protected $fillable = ['id', 'content'];
}
