<?php

namespace App\Http\Controllers\Api\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use App\Repositories\Home\HomeRepository;

class HomeController extends Controller
{
    protected $_homeRepository;

    public function __construct(HomeRepository $homeRepository)
    {
        $this->_homeRepository = $homeRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relationship = [
            'products',
            // 'products.color',
            // 'products.images',
            'products.thumb',
        ];
        $categories = $this->_homeRepository->getProductByCategories($relationship);

        return $categories;
    }
}
