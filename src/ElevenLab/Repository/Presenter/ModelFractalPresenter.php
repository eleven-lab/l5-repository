<?php
namespace ElevenLab\Repository\Presenter;

use Exception;
use ElevenLab\Repository\Transformer\ModelTransformer;

/**
 * Class ModelFractalPresenter
 * @package ElevenLab\Repository\Presenter
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
 */
class ModelFractalPresenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return ModelTransformer
     * @throws Exception
     */
    public function getTransformer()
    {
        if (!class_exists('League\Fractal\Manager')) {
            throw new Exception("Package required. Please install: 'composer require league/fractal' (0.12.*)");
        }

        return new ModelTransformer();
    }
}
