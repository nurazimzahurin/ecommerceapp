<?php

namespace App\Repositories;

use App\Models\Advertisement;
use App\Models\AdvertisementCategory;
use App\Models\AdvertisementStatus;

class AdvertisementRepository
{
    protected $model;
    protected $modelAdvertisementCategory;
    protected $modelAdvertisementStatus;

    public function __construct(Advertisement $advertisement, AdvertisementCategory $advertisementCategory, AdvertisementStatus $advertisementStatus)
    {
        $this->model = $advertisement;
        $this->modelAdvertisementCategory = $advertisementCategory;
        $this->modelAdvertisementStatus = $advertisementStatus;
    }

    public function getAdvertisementCategories()
    {
        return $this->modelAdvertisementCategory->all();
    }

    public function getAdvertisementStatuses()
    {
        return $this->modelAdvertisementStatus->all();
    }

}