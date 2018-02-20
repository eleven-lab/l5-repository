<?php
namespace ElevenLab\Repository\Contracts;

/**
 * Interface Transformable
 * @package ElevenLab\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
 */
interface Transformable
{
    /**
     * @return array
     */
    public function transform();
}
