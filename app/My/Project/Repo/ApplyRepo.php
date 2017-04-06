<?php

namespace My\Project\Repo;

use My\User\User;
use My\Project\Apply;

class ApplyRepo
{
	private $apply;

	public function __construct(Apply $apply)
	{
		$this->apply = $apply;
	}

	public function pageByStatus($status, $n=10)
	{
	    return $this->apply->with('images')->where('status', $status)->latest()->paginate($n);
	}

	public function workingPage($n=10)
	{
	    return $this->apply->with('images', 'project', 'leader')
	    			->whereStatus('施工')
	    			->OrderBy('id', 'desc')->paginate($n);

	}

	public function byId($id)
	{
	    return $this->apply->with('images', 'leader', 'customer')->findOrFail($id);
	}

	public function giveLeader($id, $leader_id)
	{
		User::findOrFail($leader_id);
	    return $this->apply->findOrFail($id)->update(['leader_id' => $leader_id]);
	}

}
