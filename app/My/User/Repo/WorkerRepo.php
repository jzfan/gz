<?php

namespace My\User\Repo;

use My\User\Worker;

class WorkerRepo
{
	private $worker;

	public function __construct(Worker $worker)
	{
		$this->worker = $worker;
	}

	public function byPage($n=10)
	{
	    return $this->worker->with('user')->latest()->paginate($n);
	}
}