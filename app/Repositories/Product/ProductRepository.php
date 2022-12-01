<?php
namespace App\Repositories\Product;

use App\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository
{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * getProductById
     */
    public function getProductById($id)
    {
        $product = $this->model->find($id);

        return $product;
    }

    public function getProductByRelationship($id, $relationship = ['color', 'thumb'])
    {
        return $this->getProductById($id)->load($relationship);
    }
}