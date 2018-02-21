<?php
namespace ElevenLab\Repository\Events;

use Illuminate\Contracts\Auth\Authenticatable;
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
     * @var Authenticatable
     */
    protected $user;

    /**
     * @param RepositoryInterface $repository
     * @param Model               $model
     */
    public function __construct(RepositoryInterface $repository, Model $model)
    {
        $this->repository = $repository;
        $this->model = $model;
        $this->user = \Auth::user();
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
     * @return Authenticatable
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }
}
