<?php namespace MyAdm\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'MyAdm\Repositories\LinkRepositoryInterface',
			'MyAdm\Repositories\DbLinkRepository'
		);
	}
}