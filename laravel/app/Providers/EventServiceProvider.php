<?php

namespace laravel\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'laravel\Events\Event' => [
            'laravel\Listeners\EventListener',
        ],
        'laravel\Events\StudentAdded' => [
            'laravel\Listeners\HandlerNewStudentAdded'
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
