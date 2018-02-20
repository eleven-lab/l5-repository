<?php
namespace ElevenLab\Repository\Events;

use Illuminate\Database\Eloquent\Model;
use ElevenLab\Repository\Contracts\RepositoryInterface;

/**
 * Class RepositoryEventBase
 * @package ElevenLab\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
@author Valerio Cervo <valerio.cervo@moveax.it>
 */
abstract class RepositoryEventBase
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @var RepositoryInterface
     */
    protected $repository;

    /**
     * @var string
     */
    protected $action;

    /**
     * @param RepositoryInterface $repository
     * @param Model               $model
     */
    public function __construct(RepositoryInterface $repository, Model $model)
    {
        $this->repository = $repository;
        $this->model = $model;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return RepositoryInterface
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }
}
