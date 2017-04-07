<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use My\Project\Repo\ApplyRepo;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
	private $apply;

	public function __construct(ApplyRepo $apply)
	{
		$this->apply = $apply;
	}
  
    public function sites()
    {
        $workings = $this->apply->workingPage(10);
        return view('frontend.apply.workings', compact('workings'));
    }

    public function show($id)
    {
        $site = $this->apply->byId($id);
        return view('frontend.apply.site', compact('site'));
    }
     
}
