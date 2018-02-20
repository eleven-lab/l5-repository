<?php
namespace ElevenLab\Repository\Events;

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
}
