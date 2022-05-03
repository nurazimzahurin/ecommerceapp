<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    const TYPE_PRODUCT = 1;
    const TYPE_SERVICES = 2;
    const TYPE_ALL = [
        self::TYPE_PRODUCT,
        self::TYPE_SERVICES
    ];
    
    protected $keyType = 'integer';

    protected $fillable = ['user_id', 'title', 'description', 'category_type', 'category_id', 'advertisement_category_id', 'advertisement_status_id', 'starts_at', 'ends_at', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->morphTo(__FUNCTION__, 'category_type', 'category_id');
    }

    public function advertisementCategory()
    {
        return $this->belongsTo('App\AdvertisementCategory');
    }

    public function advertisementStatus()
    {
        return $this->belongsTo('App\AdvertisementStatus');
    }
}
