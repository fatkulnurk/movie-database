<?php

namespace App\Models;

use App\Traits\Models\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieEpisode extends Model
{
    use HasFactory, UuidTrait;
}
