<?php

namespace ElevenLab\Repository\Criteria;

use Illuminate\Database\Eloquent\SoftDeletes;
use ElevenLab\Repository\Contracts\CriteriaInterface;
use ElevenLab\Repository\Contracts\RepositoryInterface;

/**
 * Class WithTrashedCriteria
 * @package namespace ElevenLab\Repository\Criteria;
 */
class WithTrashedCriteria implements CriteriaInterface
{

    /**
     * Apply soft deleted criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $traits = class_uses_recursive(is_object($model) ? get_class($model) : $model);

        if(array_key_exists(SoftDeletes::class, $traits)) {
            $model = $model->withTrashed();
        }

        return $model;
    }
}
