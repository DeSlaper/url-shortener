<?php namespace MyAdm\Repositories;

use Link;

class DbLinkRepository implements LinkRepositoryInterface {

	public function byUrl($url)
	{
		return Link::whereUrl($url)->first();
	}

	public function create(array $data)
	{
		return Link::create($data);
	}

	public function byHash($hash)
	{
		return Link::whereHash($hash)->first();
	}
}