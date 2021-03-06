<?php

namespace Gz\Project\Repo;

use Gz\User\User;
use Carbon\Carbon;
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
	    return $this->apply->with('gallery.images', 'leader', 'user')->findOrFail($id);
	}

	public function giveLeader($id, $leader_id)
	{
		$this->user->findOrFail($leader_id);
	    return $this->apply->findOrFail($id)->update(['leader_id' => $leader_id]);
	}

	public function store($input)
	{
		if (\Auth::check()) {
			$input = array_merge($input, ['user_id' => \Auth::user()->id]);
		}
	    return $this->apply->create($input);
	}

	public function newCountB4Days($n)
	{
	    return $this->apply->where('created_at', '>', Carbon::now()->subDays($n))->count();
	}

}
