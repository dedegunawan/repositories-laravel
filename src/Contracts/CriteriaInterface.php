<?php
namespace Dede\Repositories\Contracts;

use Dede\Repositories\Criteria\Criteria;

interface CriteriaInterface {
    public function skipCriteria($status = true);

    public function getCriteria();

    public function getByCriteria(Criteria $criteria);

    public function pushCriteria(Criteria $criteria);

    public function applyCriteria();

    public function clearCriteria();

}
