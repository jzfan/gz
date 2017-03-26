<?php

namespace My\User\Repo;

use My\User\Leader;

class LeaderRepo
{
	private $leader;

	public function __construct(Leader $leader)
	{
		$this->leader = $leader;
	}

	public function rankList($n=10)
	{
	    return $this->leader->with('user')->orderBy('rank', 'desc')->take($n)->get();
	}

	public function offerFor($decoration_id, $amount)
	{
	    return $this->leader->offers()->create([
	    		'amount' => $amount,
	    		'decoration_id' => $decoration_id
	    	]);
	}

	public function byPage($n=10)
	{
	    return $this->leader->with('user')->orderBy('id', 'desc')->paginate($n);
	}
}