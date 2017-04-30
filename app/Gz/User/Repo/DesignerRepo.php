<?php

namespace Gz\User\Repo;

use Gz\User\Designer;

class DesignerRepo
{
	protected $designer;

	public function __construct(Designer $designer)
	{
		$this->designer = $designer;
	}

	public function getPage($n)
	{
		return $this->designer->latest()->paginate($n);
	}

	public function create($data)
	{
		// dd($data);
	    return $this->designer->create($data);
	}

	public function find($id)
	{
	    return $this->designer->findOrFail($id);
	}


	public function pageByGallery($n)
	{
	    return $this->designer->has('galleries')->with(['galleries' => function ($q) {
	    	$q->orderBy('updated_at', 'desc');
	    }])->latest()->paginate($n);
	}

	public function feedBackList($n)
	{
	    return $this->designer->orderBy('feedback_rate', 'desc')->take($n)->get();
	}

	public function newGalleries($n)
	{
	    return $this->designer->galleries()->orderBy('updated_at', 'desc')->take($n)->get();
	}

	public function updateById($id, $input)
	{
	    return $this->find($id)->update($input);
	}

	public function delete($id)
	{
	    return $this->designer->destroy($id);
	}
}