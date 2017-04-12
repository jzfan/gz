<?php

use Gz\Item\Item;
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

        $applies = Apply::inRandomOrder()->take(5)->get();

        foreach ($applies as $apply) {
        	$items = $this->getItems();
        	$amount= collect($items)->sum( function ($item) {
        		return $item['options']->sum('total');
        	});
        	$materials = $this->getMaterials();

        	Offer::create([
        			'apply_id' => $apply->id,
        			'data' => [
	        				'items' => $items,
	        				'materials' => $materials
        				],
        			'amount' => $amount
        		]);
        }
    }

    protected function getItems()
    {
    	$items = Item::inRandomOrder()->take(2)->get();
        $arr = [];
        foreach ($items as $item) {
        	if ($item->single) {
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
        $materials = Material::inRandomOrder()->take(2)->get();
        return $materials->map(function ($m) {
        	return [
        		'id' => $m->id,
        		'name' => $m->name,
        		'unit' => $m->unit
        	];
        });
    }
}
