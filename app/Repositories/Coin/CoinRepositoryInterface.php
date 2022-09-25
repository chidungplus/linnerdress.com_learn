<?php

namespace App\Repositories\Coin;

use App\Repositories\RepositoryInterface;
use Throwable;

/**
 * Interface CoinRepositoryInterface
 *
 * @package App\Repositories\User
 */
interface CoinRepositoryInterface extends RepositoryInterface
{
	public function getCoin($user);
    
}