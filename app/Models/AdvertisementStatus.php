<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertisementStatus extends Model
{
    use HasFactory;

    const INACTIVE = 1;
    const ACTIVE = 2;

    protected $keyType = 'integer';

    protected $fillable = ['name', 'created_at', 'updated_at'];

    public function advertisements()
    {
        return $this->hasMany('App\Advertisement');
    }
}
