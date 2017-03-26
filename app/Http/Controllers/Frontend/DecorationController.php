<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use My\Project\Repo\DecorationRepo;
use App\Http\Controllers\Controller;

class DecorationController extends Controller
{
	private $decoration;

	public function __construct(DecorationRepo $decoration)
	{
		$this->decoration = $decoration;
	}
  
    public function sites()
    {
        $workings = $this->decoration->workingPage(10);
        return view('frontend.decoration.workings', compact('workings'));
    }

    public function show($id)
    {
        $site = $this->decoration->byId($id);
        return view('frontend.decoration.site', compact('site'));
    }
}
