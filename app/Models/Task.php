<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function deadline()
    {
        return Carbon::parse($this->deadline)->formatLocalized('%A, %d %B %Y %H:%M:%S');
    }
}
