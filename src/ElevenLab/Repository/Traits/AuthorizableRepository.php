<?php

namespace ElevenLab\Repository\Traits;


use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Support\Arr;

trait AuthorizableRepository
{

    protected $skipAuthorization = false;

    protected $withArguments = [];

    /**
     * Authorize a given action against a set of arguments.
     *
     * @param  mixed  $ability
     * @param  mixed|array  $arguments
     * @return mixed
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function authorize($ability, $arguments = [])
    {

        if(!config('repository.enabled', true)) return true;

        if($this->skipAuthorization) return true;

        $arguments = Arr::wrap($arguments) + $this->withArguments;

        list($ability, $arguments) = $this->parseAbilityAndArguments($ability, $arguments);

        return app(Gate::class)->authorize($ability, $arguments);
    }

    /**
     * Authorize a given action for a user.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|mixed  $user
     * @param  mixed  $ability
     * @param  mixed|array  $arguments
     * @return mixed
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function authorizeForUser($user, $ability, $arguments = [])
    {

        if(!config('repository.enabled', true)) return true;

        if($this->skipAuthorization) return true;

        $arguments = array_merge(Arr::wrap($arguments), $this->withArguments);

        list($ability, $arguments) = $this->parseAbilityAndArguments($ability, $arguments);

        return app(Gate::class)->forUser($user)->authorize($ability, $arguments);
    }

    /**
     * Guesses the ability's name if it wasn't provided.
     *
     * @param  mixed  $ability
     * @param  mixed|array  $arguments
     * @return array
     */
    protected function parseAbilityAndArguments($ability, $arguments)
    {
        if (is_string($ability)) {
            return [$ability, $arguments];
        }

        return [debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 3)[2]['function'], $ability];
    }

    public function skipAuthorization($bool)
    {

        $this->skipAuthorization = $bool;
        return $this;

    }

    protected function authorizeWithArguments(array $arguments = [])
    {

        $this->withArguments = $arguments;
        return $this;

    }

}