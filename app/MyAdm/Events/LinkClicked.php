<?php namespace MyAdm\Events;

use MyAdm\Repositories\DbLinkRepository as Repository;

class LinkClicked {

    /**
     * @var Repository
     */
    private $repository;

    function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function fire($id)
    {
        $this->repository->updateCounter($id);
    }
}