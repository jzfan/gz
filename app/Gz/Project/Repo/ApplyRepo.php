<?php

namespace Gz\Project\Repo;

use Gz\User\User;
use Gz\Project\Apply;

class ApplyRepo
{
	private $apply;
	private $user;

	public function __construct(Apply $apply, User $user)
	{
		$this->apply = $apply;
		$this->user = $user;
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
		$this->user->findOrFail($leader_id);
	    return $this->apply->findOrFail($id)->update(['leader_id' => $leader_id]);
	}

	public function store($input)
	{
	    return $this->apply->create($input);
	}

	public function pageByGallery($n)
	{
	    return $this->apply->has('gallery')->with('gallery')->latest()->paginate($n);
	}

	public function getWorking($id)
	{
	    return $this->apply->with('offer.inspections')->findOrFail($id);
	}

}
