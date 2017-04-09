<?php

namespace Gz\Item\Repo;

use Gz\Item\Item;

class ItemRepo
{
	private $item;

	public function __construct(Item $item)
	{
		$this->item = $item;
	}

	public function byPage($n=10)
	{
	    return $this->item->latest()->paginate($n);
	}

	public function deleteWithOption($id)
	{
		$item = $this->item->findOrFail($id);
		$item->options()->delete();
	    return $item->delete();
	}

	public function store($data)
	{
		$data['single'] = isset($data['single']) ? 1 : 0;
	    return $this->item->create($data);
	}

	public function find($id)
	{
	    return $this->item->with('options')->findOrFail($id);
	}
}
