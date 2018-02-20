<?php

namespace ElevenLab\Repository\Traits;

trait SortableRepository
{

    protected $skipSorting = false;

    public function skipSorting($bool)
    {
        $this->skipSorting = $bool;
        return $this;
    }

    public function skipsSorting()
    {
        return $this->skipSorting;
    }

    public function getDefaultSorting()
    {

        return $this->defaultSorting;

    }


}