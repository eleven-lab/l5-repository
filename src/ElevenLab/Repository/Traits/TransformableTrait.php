<?php

namespace ElevenLab\Repository\Traits;

/**
 * Class TransformableTrait
 * @package ElevenLab\Repository\Traits
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
 */
trait TransformableTrait
{
    /**
     * @return array
     */
    public function transform()
    {
        return $this->toArray();
    }
}
