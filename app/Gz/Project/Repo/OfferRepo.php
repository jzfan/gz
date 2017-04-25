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
		$apply = \Gz\Project\Apply::create($input['apply']);

		$options = collect($input['options'])->map( function ($input_option) {
			$option = \Gz\Item\ItemOption::select('id', 'item_id', 'title', 'description', 'unit', 'price')->findOrFail($input_option['id']);
			$option->quantity = $input_option['quantity'];
			$option->total = $option->quantity * $option->price;
			return $option;
		});
		$items = $options->groupBy('item_id')->map(function ($group) {
			$item = $group->first()->item;
			return [
				'id' => $item->id,
				'name' => $item->name,
				'options' => $group->toArray()
			];
		})->toArray();

		return $this->offer->updateOrCreate([
				'user_id' => \Auth::user()->id,
				'apply_id' => $apply->id
				], [
				'data' => [
						'materials' => $input['materials'],
						'items' => $items, 
					],
				'amount' => $options->sum('total')
				]
			);
	}
}