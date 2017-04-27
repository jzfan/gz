<?php

namespace Gz\User\Repo;

use Gz\User\Worker;

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

	public function byCrafts($n)
	{
		$crafts = $this->worker->groupBy('craft')->get(['craft'])->pluck('craft')->toArray();
		return collect($crafts)->map( function($craft) use($n) {
			return $this->worker->with('user')->whereCraft($craft)->latest()->take($n)->get();
		});
	}
}