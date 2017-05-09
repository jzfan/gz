<?php

namespace App\Http\Controllers\Frontend;

use Gz\User\Repo\LeaderRepo;
use Illuminate\Http\Request;
use Gz\Project\Repo\ApplyRepo;
use Gz\Project\Repo\OfferRepo;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
	private $apply;
    private $offer;
    private $leader;

	public function __construct(ApplyRepo $apply, OfferRepo $offer, LeaderRepo $leader)
	{
		$this->apply = $apply;
        $this->offer = $offer;
        $this->leader = $leader;
	}
  
    public function construction()
    {
        $constructions = $this->apply->pageByGallery(8);
        $offers = $this->offer->newList(3);
        $leaders = $this->leader->rankList(5);
        // $pictures = $this->gallery->newList(6);
        // $tags = $this->article->allTags();
        return view('frontend.apply.construction', compact('constructions', 'offers', 'leaders'));
    }

    public function show($id)
    {
        $site = $this->apply->byId($id);
        return view('frontend.apply.site', compact('site'));
    }

    public function store()
    {
        $this->validate(request(), [
                'name' => 'required|min:2,max:60',
                'block' => 'required|min:2,max:60',
                'phone' => 'required|phone',
                'square' => 'required'
            ]);
        $this->apply->store(request()->input());
        return redirect()->back()->withSuccess('ok');
    }
     
}
