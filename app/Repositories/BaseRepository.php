<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 *
 * @package App\Repositories
 */
class BaseRepository implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function paginate(int $limit, $sort = 'desc')
    {
    	return $this->model->orderBy('id',$sort)->paginate($limit);
    }
    public function findOrFail(int $id)
    {
        return $this->model->findOrFail($id);
    }
    public function findById(int $id)
    {
        return $this->model->where('id', $id)->first();
    }
    public function findByUser(int $id, $sort = 'desc')
    {
        return $this->model->where('user_id', $id)->orderBy('id',$sort)->get();
    }
}
