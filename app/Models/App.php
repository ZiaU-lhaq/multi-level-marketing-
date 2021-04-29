<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Maher\Counters\Traits\HasCounter;
use Maher\Counters\Models\Counter;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    use HasCounter;
    public $timestamps=false;
    protected $fillable = [
        'name',
        'app_screenshot',
        'link'
    ];

}
