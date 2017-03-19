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
	    return $this->decoration->OrderBy('id', 'desc')->paginate($n);
	}

}
