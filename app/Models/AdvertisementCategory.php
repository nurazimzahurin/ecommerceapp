<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementCategory extends Model
{
    const GRAPHICS_DESIGN = 1;
    const DIGITAL_MARKETING = 2;
    const WRITING_TRANSLATION = 3;
    const VIDEO_ANIMATION = 4;
    const MUSIC_AUDIO = 5;
    const PROGRAMMING_TECH = 6;
    const BUSINESS = 7;
    const LIFESTYLES = 8;
    const INDUSTRIES = 9;
    const SELL_BUY = 10;

    const ALL_CATEGORIES = [
        self::GRAPHICS_DESIGN,
        self::DIGITAL_MARKETING,
        self::WRITING_TRANSLATION,
        self::VIDEO_ANIMATION,
        self::MUSIC_AUDIO,
        self::PROGRAMMING_TECH,
        self::BUSINESS,
        self::LIFESTYLES,
        self::INDUSTRIES,
        self::SELL_BUY
    ];

    protected $keyType = 'integer';

    protected $fillable = ['name', 'created_at', 'updated_at'];

    public function advertisements()
    {
        return $this->hasMany('App\Advertisement');
    }
}
