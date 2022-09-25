<?php

namespace App\Repositories;

use Exception;
use Illuminate\Database\Eloquent\Model;

/**
 * Interface BaseRepositoryInterface
 *
 * @package App\Repositories
 */
interface RepositoryInterface
{
	public function paginate(int $limit, $sort);

	public function findOrFail(int $id);
	
    public function findById(int $id);

    public function findByUser(int $id, $sort);
}