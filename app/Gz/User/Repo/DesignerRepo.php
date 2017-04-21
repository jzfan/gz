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
}