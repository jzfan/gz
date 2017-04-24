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

	public function byId($id)
	{
	    return $this->offer->with('user', 'apply')->findOrFail($id);
	}

	public function createByUid($uid, $input)
	{
		// dd($input);
		if ($materials = $input['materials'] ?? []) {
			$materials = collect($materials)->map( function ($m) {
				return [ 'id' => $m];
			});
		}

		$apply = \Gz\Project\Apply::firstOrCreate([ 'phone' => $input['phone']], $input);
		return $this->offer->firstOrCreate([
				'user_id' => \Auth::user()->id,
				'apply_id' => $apply->id
				], [
				'data' => [
						'materials' => $materials
					]
				]
			);
	}
}