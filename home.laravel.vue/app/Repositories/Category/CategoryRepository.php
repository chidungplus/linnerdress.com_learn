<?php 
namespace App\Repositories\Category;

use App\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository
{
    protected $model;

    public function __construct(Category $_model)
    {
        $this->model = $_model;
    }

    /**
     * Get all categories
     * 
     * @param array $relationship
     * 
     * @return collection
     */
    public function getCategories($relationship = [])
    {
        $categories = $this->model
            ->query()
            ->with($relationship)
            ->paginate(config('define.paginate.default'));  
            
        return $categories;
    }
    
}