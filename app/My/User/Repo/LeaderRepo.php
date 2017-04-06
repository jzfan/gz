<?php

namespace My\User\Repo;

use My\User\User;
use My\User\Leader;

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
}