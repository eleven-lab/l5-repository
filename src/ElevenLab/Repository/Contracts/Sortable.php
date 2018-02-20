<?php

namespace ElevenLab\Repository\Contracts;

interface Sortable
{

    /**
     * Returns the default sorting
     *
     * @return mixed
     */
    public function getDefaultSorting();

}