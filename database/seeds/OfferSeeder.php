<?php

use Gz\Item\Item;
use Gz\User\User;
use Gz\Item\Material;
use Gz\Project\Apply;
use Gz\Project\Offer;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Offer::truncate();

        $applies = Apply::inRandomOrder()->take(22)->get();

        foreach ($applies as $apply) {
        	$items = $this->getItems();
        	$amount= collect($items)->sum( function ($item) {
        		return $item['options']->sum('total');
        	});
        	$materials = $this->getMaterials();
            $leader = User::inRandomOrder()->whereRole('leader')->first();
        	$offer = Offer::create([
        			'apply_id' => $apply->id,
                    'user_id' => $leader->id,
                    'data' => [
                            'items' => $items,
                            'materials' => $materials
        				],
        			'amount' => $amount
        		]);
            $apply->update(['leader_id' => $leader->id]);
            if (rand(0, 1)) {
                $offer->update(['accepted_at' => \Carbon\Carbon::now()]);
            }
        }
    }

    protected function getItems()
    {
    	$items = Item::inRandomOrder()->take(2)->get();
        $arr = [];
        foreach ($items as $item) {
        	if ($item->single == 1) {
        		$arr[] = $this->getSingle($item);
        	} else {
        		foreach (range(1, 2) as $index) {
        			$arr[] = $this->getSingle($item);
        		}
        	}
        }
        return $arr;
    }

    protected function getSingle($item)
    {
        $options = $this->getOptions($item);
        return [
        	'id' => $item->id,
        	'name' => $item->name,
        	'options' => $options
        ];
        
    }

    protected function getOptions($item)
    {
    	$options = $item->options()->inRandomOrder()->take(2)->get();
    	return $options->map( function ($option) {
        	$rand = mt_rand(1, 99);
        	return [
        		'id' => $option->id,
        		'title' => $option->title,
        		'description' => $option->description,
        		'unit' => $option->unit,
        		'price' => $option->price,
        		'quantity' => $rand,
        		'total' => $rand * $option->price
        	];

    	});
    }

    protected function getMaterials()
    {
        return Material::inRandomOrder()->select('id', 'brand', 'name')->take(mt_rand(2, 5))->get();
    }
}
