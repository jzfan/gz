<?php

namespace App\Http\Controllers\Backend;

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
        return view('backend.offer.index', compact('offers'));
    }

    public function show($id)
    {
        $offer = $this->offer->byId($id);
        return view('backend.offer.show', compact('offer'));
    }

    
}
