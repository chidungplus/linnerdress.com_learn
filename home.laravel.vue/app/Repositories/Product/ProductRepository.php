<?php
namespace App\Repositories\Product;

use App\Product;
use App\Repositories\BaseRepository;
use Illuminate\Support\Fluent;
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
            'productItems.avatar',
            'productItems.color:id,name',
        ];
        $product = $this->getProductById($id)->load($relationship);

        $colorUnique = array();
        $colors = array();
        $i = 0;
        foreach($product->productItems as $row){
            if(!in_array($row->color_value, $colorUnique)){
                $colorUnique[] = $row->color_value;

                $colors[$i]['value'] = $row->color_value;
                $colors[$i]['avatar'] = $row->avatar->path;
                $i++;
            }
        }
        
        foreach($colorUnique as $key => $row){
            $i = 0;
            foreach($product->productItems as $key2 => $record){
                if($row == $record->color_value){
                    $colors[$key]['sizes'][$i]['value'] = $record->size_value;
                    $colors[$key]['sizes'][$i]['product_item_id'] = $record->id;
                    $colors[$key]['sizes'][$i]['quantity'] = $record->quantity;
                    $i++;
                }
            }
        }
        $colors = new Fluent($colors);
        $product->colors = $colors;
        return $product;
    }
}