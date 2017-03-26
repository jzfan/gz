<?php

namespace My\Project\Repo;

use My\Project\Decoration;

class DecorationRepo
{
	private $decoration;

	public function __construct(Decoration $decoration)
	{
		$this->decoration = $decoration;
	}

	public function byPage($n=10)
	{
	    return $this->decoration->with('images')->OrderBy('id', 'desc')->paginate($n);
	}

	public function workingPage($n=10)
	{
	    return $this->decoration->with('images', 'project')
	    			->whereStatus('施工')
	    			->OrderBy('id', 'desc')->paginate($n);

	}

	public function byId($id)
	{
	    return $this->decoration->with('images', 'leader.user')->findOrFail($id);
	}

}
