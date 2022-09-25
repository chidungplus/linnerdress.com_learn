<?php

namespace App\Repositories\Coin;

use App\Coin;
use App\Repositories\BaseRepository;
use Illuminate\Database\DatabaseManager;
/**
 * Class BaseRepository
 *
 * @package App\Repositories
 */
class CoinRepository extends BaseRepository implements CoinRepositoryInterface
{
    /**
     * @var Coin
     */
    protected $model;

    /**
     * CoinRepository constructor.
     *
     * @param Coin $model
     */
    public function __construct(Coin $model)
    {
        parent::__construct($model);
    }
    public function getCoin($user)
    {
        return Coin::where('user_id',$user)->get();
    }
}