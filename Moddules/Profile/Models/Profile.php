<?php

namespace Modules\Profile\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Profile\Database\Factories\ProfileFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    protected static function newFactory()
    {
        return ProfileFactory::new();
    }
}
