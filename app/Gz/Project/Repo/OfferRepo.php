<?php

namespace Gz\Project\Repo;

use Carbon\Carbon;
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
		$apply = \Gz\Project\Apply::create($input['apply']);
		$items = collect($input['items'])->map( function ($item) {
			$options = collect($item['options'])->map( function ($input_option) {
				$option = \Gz\Item\ItemOption::select('id', 'item_id', 'title', 'description', 'unit', 'price')->findOrFail($input_option['id']);
				$option->quantity = $input_option['quantity'];
				$option->total = $option->quantity * $option->price;
				return $option;
			});
			return [
				'id' => $item['id'],
				'name' => \Gz\Item\Item::findOrFail($item['id'])->name,
				'options' => $options
			];
		});

		return $this->offer->updateOrCreate([
				'user_id' => \Auth::user()->id,
				'apply_id' => $apply->id
				], [
				'data' => [
						'materials' => $input['materials'],
						'items' => $items, 
					],
				'amount' => collect($items)->sum( function ($item) {
						return collect($item['options'])->sum('total');
					})
				]
			);
	}

	public function setStatusById($id, $status)
	{
	    $offer = $this->offer->findOrFail($id);
	    switch ($status) {
	    	case 'done':
	    		return $offer->update(['accepted_at' => $offer->accepted_at ?? Carbon::now(), 'done_at' => Carbon::now()]);
	    	case 'working':
	    		return $offer->update(['accepted_at' => Carbon::now(), 'done_at' => null]);
	    	default:
	    		return $offer->update(['accepted_at' => null, 'done_at' => null]);
	    }
	}

	public function getWorking($id)
	{
	    return $this->offer->with('galleries')->findOrFail($id);
	}
}