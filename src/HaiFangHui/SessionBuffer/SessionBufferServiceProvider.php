<?php namespace HaiFangHui\SessionBuffer;

use Illuminate\Support\ServiceProvider;

class SessionBufferServiceProvider extends ServiceProvider {

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
	public function boot()
	{
		$this->package('haifanghui/sessionbuffer');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('session_buffer', function ($app) {
            return new \HaiFangHui\SessionBuffer\SessionBuffer;
        });
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('SeessionBuffer');
	}

}
