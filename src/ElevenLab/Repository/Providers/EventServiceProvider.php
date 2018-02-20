<?php
namespace ElevenLab\Repository\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class EventServiceProvider
 * @package ElevenLab\Repository\Providers
 * @author Anderson Andrade <contato@andersonandra.de>
 * @author Valerio Cervo <valerio.cervo@moveax.it>
 */
class EventServiceProvider extends ServiceProvider
{

    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'ElevenLab\Repository\Events\RepositoryEntityCreated' => [
            'ElevenLab\Repository\Listeners\CleanCacheRepository'
        ],
        'ElevenLab\Repository\Events\RepositoryEntityUpdated' => [
            'ElevenLab\Repository\Listeners\CleanCacheRepository'
        ],
        'ElevenLab\Repository\Events\RepositoryEntityDeleted' => [
            'ElevenLab\Repository\Listeners\CleanCacheRepository'
        ]
    ];

    /**
     * Register the application's event listeners.
     *
     * @return void
     */
    public function boot()
    {
        $events = app('events');

        foreach ($this->listen as $event => $listeners) {
            foreach ($listeners as $listener) {
                $events->listen($event, $listener);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        //
    }

    /**
     * Get the events and handlers.
     *
     * @return array
     */
    public function listens()
    {
        return $this->listen;
    }
}
