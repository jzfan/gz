<?php

namespace App\Http\Controllers\Frontend;

use Gz\Item\Material;
use Illuminate\Http\Request;
use Gz\Project\Repo\OfferRepo;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
	private $offer;

	public function __construct(OfferRepo $offer)
	{
		$this->offer = $offer;
	}

    public function index()
    {
        $offers = $this->offer->byPage(10);
        return view('frontend.offer.index', compact('offers'));
    }

    public function getFormOne()
    {
        $materials = Material::get(['id', 'name', 'brand']);
        return view('frontend.offer.form', compact('materials'));
    }

    // public function setFormOne()
    // {
    //     $this->validate(request(), [
    //             'phone' => 'required'
    //         ]);
    //     $this->offer->createByUid(\Auth::user()->id, request()->except('_token'));
    //     return view('frontend.offer.form-2');
    // }

    public function getFormTwo()
    {
        $items = \Gz\Item\Item::with('options')->orderBy('single', 'desc')->get(['id', 'name', 'single']);
        return view('frontend.offer.form-2', compact('items'));
    }
}
