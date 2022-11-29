<?php
namespace App\Repositories\Home;

use App\Repositories\BaseRepository;
use App\Repositories\Category\CategoryRepository;

class HomeRepository extends BaseRepository 
{

    /**
     * Get all
     * 
     * @param array $relationship
     * 
     * @return collection
     */
    public function getProductByCategories($relationship = [])
    {
        $categories = app(CategoryRepository::class)->getCategories($relationship);

        return $categories;
    }
}