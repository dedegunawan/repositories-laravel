<?php
namespace Dede\Repositories\Criteria;

use Dede\Repositories\Contracts\RepositoryInterface as Repository;
use Dede\Repositories\Contracts\RepositoryInterface;

/**
 *
 */
abstract class Criteria
{

    public abstract function apply($model, Repository $repository);
}
