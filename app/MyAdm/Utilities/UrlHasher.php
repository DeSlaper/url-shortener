<?php namespace MyAdm\Utilities;

class UrlHasher {

	protected $hashLength = 5;

	public function make()
	{
		$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		return substr(str_shuffle(str_repeat($pool, $this->hashLength)),0, $this->hashLength);
	}
}