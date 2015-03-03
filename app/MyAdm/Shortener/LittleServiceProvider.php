<?php namespace MyAdm\Shortener;

use Illuminate\Support\ServiceProvider;

class LittleServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Little', 'MyAdm\Shortener\LittleService');
	}


}