<?php
namespace ElevenLab\Repository\Events;

/**
 * Class RepositoryEntityCreated
 * @package ElevenLab\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
@author Valerio Cervo <valerio.cervo@moveax.it>
 */
class RepositoryEntityCreated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "created";
}
