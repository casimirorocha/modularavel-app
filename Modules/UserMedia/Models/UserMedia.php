<?php

namespace Modules\UserMedia\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserMedia\Database\Factories\UserMediaFactory;

class UserMedia extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    protected static function newFactory()
    {
        return UserMediaFactory::new();
    }
}
