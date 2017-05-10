<?php

namespace App\Http\Controllers\Frontend;

use Gz\Item\Material;
use Gz\User\Repo\LeaderRepo;
use Illuminate\Http\Request;
use Gz\Project\Repo\OfferRepo;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
	private $offer;
    protected $leader;

	public function __construct(OfferRepo $offer, LeaderRepo $leader)
	{
		$this->offer = $offer;
        $this->middleware('auth')->only('show');
        $this->leader = $leader;
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

    public function construction()
    {
        $constructions = $this->offer->pageByGallery(8);
        $offers = $this->offer->newList(3);
        $leaders = $this->leader->rankList(5);
        return view('frontend.offer.construction', compact('constructions', 'offers', 'leaders'));
    }
}
