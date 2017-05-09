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
        $this->middleware('auth')->only('show');
	}

    public function index()
    {
        $offers = $this->offer->byPage(15);
        $tag = \Gz\Article\Tag::inRandomOrder()->first();
        return view('frontend.offer.index', compact('offers', 'tag'));
    }

    public function show($id)
    {
        $offer = \Gz\Project\Offer::findOrFail($id);
        return view('frontend.offer.show', compact('offer'));
    }

    public function getFormOne()
    {
        $materials = Material::get(['id', 'name', 'brand'])->groupBy('name');
        return view('frontend.offer.form', compact('materials'));
    }

    public function store()
    {
        // dd(request()->input());
        $offer = $this->offer->createByUid(\Auth::user()->id, request()->except('_token'));
        return $offer->id;
    }

    public function getFormTwo()
    {   
        $items = \Gz\Item\Item::with('options')->orderBy('id', 'asc')->get(['id', 'name', 'single']);
        return view('frontend.offer.form-2', compact('items'));
    }

    public function edit($id)
    {
        $offer = $this->offer->byId($id);
        // $m = $offer->data['materials'];
        // dd(collect($m)->pluck('name'));
        $materials = Material::get(['id', 'name', 'brand'])->groupBy('name');
        return view('frontend.offer.edit', compact('offer', 'materials'));
    }

    public function showWorking($id)
    {
        $working = $this->offer->getWorking($id);
        return view('frontend.offer.working', compact('working'));
    }
}
