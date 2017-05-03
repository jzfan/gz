<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
	private $item;

	public function __construct(ItemRepo $item)
	{
		$this->item = $item;
	}

    public function all()
    {
        return $this->item->all();
    }
}
