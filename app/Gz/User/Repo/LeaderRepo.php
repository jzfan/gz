<?php

namespace Gz\User\Repo;

use Gz\User\User;
use Gz\User\Leader;

class LeaderRepo
{
	private $leader;
	private $user;

	public function __construct(Leader $leader, User $user)
	{
		$this->leader = $leader;
		$this->user = $user;
	}

	public function rankList($n=10)
	{
	    return $this->leader->with('user')->orderBy('rank', 'desc')->take($n)->get();
	}

	public function offerFor($apply_id, $amount)
	{
	    return $this->user->offers()->create([
	    		'amount' => $amount,
	    		'apply_id' => $apply_id,
	    		'data' => []
	    	]);
	}

	public function byPage($n=10)
	{
	    return $this->leader->with('user')->orderBy('id', 'desc')->paginate($n);
	}

	public function select2()
	{
	    return $this->user->select('id', 'name')->where('role', 'leader')->get();
	}

	public function byId($id)
	{
	    return $this->user->with('leader')->whereRole('leader')->findOrFail($id);
	}

	public function showById($id)
	{
	    return $this->user->with(['comments' => function($q) {
	    	$q->latest()->take(5);
	    }, 'leaderApplies' => function ($q) {
	    	$q->latest()->take(5);
	    }])->with('leader')->whereRole('leader')->findOrFail($id);
	}

	public function tops($n=4)
	{
		return $this->leader->OrderBy('rank', 'desc')->with('user')->take($n)->get();
	}
}