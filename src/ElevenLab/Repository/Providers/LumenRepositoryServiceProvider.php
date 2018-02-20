<?php
namespace ElevenLab\Repository\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LumenRepositoryServiceProvider
 * @package ElevenLab\Repository\Providers
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
 */
class LumenRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('ElevenLab\Repository\Generators\Commands\RepositoryCommand');
        $this->app->register('ElevenLab\Repository\Providers\EventServiceProvider');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
