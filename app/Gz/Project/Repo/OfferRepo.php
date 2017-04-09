<?php

namespace Gz\Project\Repo;

use Gz\Project\Offer;

class OfferRepo
{
	private $offer;

	public function __construct(Offer $offer)
	{
		$this->offer = $offer;
	}

	public function newList($n)
	{
	    return $this->offer->with('user', 'apply')->orderBy('id', 'desc')->take($n)->get();
	}

	public function byPage($n)
	{
	    return $this->offer->with('user', 'apply')->orderBy('id', 'desc')->take($n)->paginate($n);
	}
}