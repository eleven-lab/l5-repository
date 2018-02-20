<?php
namespace ElevenLab\Repository\Contracts;

/**
 * Interface PresenterInterface
 * @package ElevenLab\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
 */
interface PresenterInterface
{
    /**
     * Prepare data to present
     *
     * @param $data
     *
     * @return mixed
     */
    public function present($data);
}
