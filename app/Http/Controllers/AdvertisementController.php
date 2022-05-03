<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdvertisementRequest;
use App\Repositories\AdvertisementRepository;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    private $advertisementRepository;

    public function __construct(AdvertisementRepository $advertisementRepository)
    {
        $this->advertisementRepository = $advertisementRepository;
    }

    public function create()
    {
        $advertisementCategories = $this->advertisementRepository->getAdvertisementCategories();
        $advertisementStatuses = $this->advertisementRepository->getAdvertisementStatuses();

        return view('advertisements.create', compact('advertisementCategories', 'advertisementStatuses'));
    }

    public function store(CreateAdvertisementRequest $createAdvertisementRequest)
    {

    }
}
