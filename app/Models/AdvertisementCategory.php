<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementCategory extends Model
{
    const APPAREL_ACCESSORIES = 1;
    const STYLE_FASHION = 2;
    const HOME_GARDEN = 3;
    const SPORT = 4;
    const HEALTH_WELLNESS = 5;
    const CHILDREN_INFANTS = 6;
    const PETS_SUPPLIES = 7;
    const ELECTRONICS = 8;
    const DESIGN = 9;
    const TECHNOLOGY = 10;
    const LABOR = 11;
    const CONSULTANCY = 12;
    const EDUCATION = 13;
    const SANITATION = 14;
    const ELECTRICAL_PLUMBING = 15;

    const ALL_CATEGORIES = [
        self::APPAREL_ACCESSORIES,
        self::STYLE_FASHION,
        self::HOME_GARDEN,
        self::SPORT,
        self::HEALTH_WELLNESS,
        self::CHILDREN_INFANTS,
        self::PETS_SUPPLIES,
        self::ELECTRONICS,
        self::DESIGN,
        self::TECHNOLOGY,
        self::LABOR,
        self::CONSULTANCY,
        self::EDUCATION,
        self::SANITATION,
        self::ELECTRICAL_PLUMBING
    ];

    protected $keyType = 'integer';

    protected $fillable = ['name', 'created_at', 'updated_at'];

    public function advertisements()
    {
        return $this->hasMany('App\Advertisement');
    }
}
