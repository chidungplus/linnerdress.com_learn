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
     * Get all product by paginate
     * 
     * @return collection
     */
    public function getAll()
    {
        $relationship = ['productItems.color'];

        return $this->model->query()
            ->with($relationship)
            ->orderBy('id', 'desc')
            ->paginate(config('define.paginate.default'));
    }

    /**
     * getProductById
     */
    public function getProductById($id)
    {
        $product = $this->model->find($id);

        return $product;
    }

    /**
     * get product by relationship
     * 
     * @param int $id 
     * 
     * @return collection
     */
    public function getProductByRelationship($id)
    {
        $relationship = [
            'productItems.gallery.images', 
            'productItems.colorAvatar',
            'productItems.sizes:id,product_item_id,quantity,value',
            'productItems.color:id,name',
        ];

        return $this->getProductById($id)->load($relationship);
    }
}