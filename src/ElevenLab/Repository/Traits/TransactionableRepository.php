<?php

namespace ElevenLab\Repository\Traits;

trait TransactionableRepository
{

    protected $skipTransactions = false;

    public function skipTransactions($bool)
    {
        $this->skipTransactions = $bool;
        return $this;
    }

    public function skipsTransactions()
    {
        return $this->skipTransactions;
    }

    public function wrapInTransaction(\Closure $routine, $attempts = 1)
    {

        return $this->skipsTransactions() ? $routine($this) : \DB::transaction($routine, $attempts);

    }




}