<?php namespace Abishekrsrikaanth\Stripe;

use Illuminate\Support\ServiceProvider;

class StripeServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot ()
    {
        $this->package('abishekrsrikaanth/stripe');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register ()
    {
        $this->app['stripe'] = $this->app->share(
            function ($app) {
                return new Stripe();
            }
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides ()
    {
        return array('stripe');
    }

}
