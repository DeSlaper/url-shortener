<?php namespace MyAdm\Shortener;

use MyAdm\Exceptions\NonExistentHashException;
use MyAdm\Repositories\LinkRepositoryInterface as LinkRepoInterface;
use MyAdm\Utilities\UrlHasher;

class LittleService {

	protected $linkRepo;
	/**
	 * @var UrlHasher
	 */
	private $urlHasher;

	function __construct(LinkRepoInterface $linkRepo, UrlHasher $urlHasher)
	{
		$this->linkRepo = $linkRepo;
		$this->urlHasher = $urlHasher;
	}


	public function make($url)
	{
		$link = $this->linkRepo->byUrl($url);

		return $link ? $link->hash : $this->makeHash($url);
	}

	public function getUrlByHash($hash)
	{
		$link = $this->linkRepo->byHash($hash);

		if ( ! $link) throw new NonExistentHashException;

		return $link->url;
	}

	private function makeHash($url)
	{
		$hash = $this->urlHasher->make($url);
		$data = compact('url', 'hash');

		\Event::fire('link.creating', [$data]);
		$this->linkRepo->create($data);

		return $hash;
	}
}