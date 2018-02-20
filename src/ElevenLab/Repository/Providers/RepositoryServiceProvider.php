<?php
namespace ElevenLab\Repository\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryServiceProvider
 * @package ElevenLav\Repository\Providers
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
 */
class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../../resources/config/repository.php' => config_path('repository.php')
        ]);

        $this->mergeConfigFrom(__DIR__ . '/../../../resources/config/repository.php', 'repository');

        $this->loadTranslationsFrom(__DIR__ . '/../../../resources/lang', 'repository');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('ElevenLab\Repository\Generators\Commands\RepositoryCommand');
        $this->commands('ElevenLab\Repository\Generators\Commands\TransformerCommand');
        $this->commands('ElevenLab\Repository\Generators\Commands\PresenterCommand');
        $this->commands('ElevenLab\Repository\Generators\Commands\EntityCommand');
        $this->commands('ElevenLab\Repository\Generators\Commands\ValidatorCommand');
        $this->commands('ElevenLab\Repository\Generators\Commands\ControllerCommand');
        $this->commands('ElevenLab\Repository\Generators\Commands\BindingsCommand');
        $this->commands('ElevenLab\Repository\Generators\Commands\CriteriaCommand');
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
