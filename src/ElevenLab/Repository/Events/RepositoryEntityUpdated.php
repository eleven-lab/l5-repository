<?php
namespace ElevenLab\Repository\Events;
use ElevenLab\Repository\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RepositoryEntityUpdated
 * @package ElevenLab\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
@author Valerio Cervo <valerio.cervo@moveax.it>
 */
class RepositoryEntityUpdated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "updated";

    /**
     * @var Model
     */
    protected $original;

    /**
     * RepositoryEntityUpdated constructor.
     * @param RepositoryInterface $repository
     * @param Model $model
     * @param Model|null $originalModel
     */
    public function __construct(RepositoryInterface $repository, Model $model, Model $originalModel = null)
    {
        parent::__construct($repository, $model);
        $this->original = $originalModel;
    }

    public function getOriginalModel()
    {
        return $this->original;
    }
}
