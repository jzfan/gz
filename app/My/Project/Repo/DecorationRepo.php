<?php

namespace My\Project\Repo;

use My\Project\Decoration;
use My\Project\DecorationItem;

class DecorationRepo
{
	private $decoration;
	private $item;

	public function __construct(Decoration $decoration, DecorationItem $item)
	{
		$this->decoration = $decoration;
		$this->item = $item;
	}

	public function pageByStatus($status, $n=10)
	{
	    return $this->decoration->with('images')->where('status', $status)->latest()->paginate($n);
	}

	public function workingPage($n=10)
	{
	    return $this->decoration->with('images', 'project', 'leader')
	    			->whereStatus('施工')
	    			->OrderBy('id', 'desc')->paginate($n);

	}

	public function byId($id)
	{
	    return $this->decoration->with('images', 'leader')->findOrFail($id);
	}

}
