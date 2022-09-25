<?php

namespace App\Repositories\CashCard;

use App\CashCard;
use App\Repositories\BaseRepository;
use Illuminate\Database\DatabaseManager;

class CashCardRepository extends BaseRepository implements CashCardRepositoryInterface
{
    protected $model;

    public function __construct(CashCard $model)
    {
        parent::__construct($model);
    }
}