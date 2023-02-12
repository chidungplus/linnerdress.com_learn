<?php
namespace App\Repositories\ProductItemSize;

use App\ProductItemSize;
use App\Repositories\BaseRepository;
use Exception;

class ProductItemSizeRepository extends BaseRepository
{
    protected $model;

    public function __construct(ProductItemSize $model)
    {
        $this->model = $model;
    }

    /**
     * getProductItemSizeById
     */
    public function getProductItemSizeById($id)
    {
        return $this->model->find($id);
    }

    /**
     * updateQuantity
     * 
     * @param int $sizeId, $quantity
     * 
     * @return mixed
     */
    public function updateQuantity($sizeId, $quantity)
    {
        try {
            $productItemSize = $this->getProductItemSizeById($sizeId); 
            $qty = $productItemSize->quantity - $quantity;
            if ($qty < 0) {
                throw new Exception("Qúa số lượng");
            }

            return $productItemSize->update([
                'quantity' => $qty
            ]);
        } catch (\Exception $ex) {
            \Log::error($ex->getMessage());

            return false;
        }
    }   
}