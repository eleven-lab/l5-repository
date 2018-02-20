<?php namespace ElevenLab\Repository\Transformer;

use League\Fractal\TransformerAbstract;
use ElevenLab\Repository\Contracts\Transformable;

/**
 * Class ModelTransformer
 * @package ElevenLab\Repository\Transformer
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
 */
class ModelTransformer extends TransformerAbstract
{
    public function transform(Transformable $model)
    {
        return $model->transform();
    }
}
