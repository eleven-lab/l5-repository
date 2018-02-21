<?php
namespace ElevenLab\Repository\Contracts;

use Illuminate\Contracts\Cache\Repository as CacheRepository;

/**
 * Interface CacheableInterface
 * @package ElevenLab\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
 */
interface CacheableInterface
{
    /**
     * Set Cache Repository
     *
     * @param CacheRepository $repository
     *
     * @return $this
     */
    public function setCacheRepository(CacheRepository $repository);

    /**
     * Return instance of Cache Repository
     *
     * @return CacheRepository
     */
    public function getCacheRepository();

    /**
     * Get Cache key for the method
     *
     * @param $method
     * @param $args
     *
     * @return string
     */
    public function getCacheKey($method, $args = null);

    /**
     * Get cache minutes
     *
     * @return int
     */
    public function getCacheMinutes();


    /**
     * Skip Cache
     *
     * @param bool $status
     *
     * @return $this
     */
    public function skipCache($status = true);
}