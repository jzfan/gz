<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Gz\Project\Repo\OfferRepo;
use Illuminate\Routing\Controller;

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

    public function getForm()
    {
        return view('frontend.offer.form');
    }
}
