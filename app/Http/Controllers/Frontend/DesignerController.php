<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Gz\User\Repo\DesignerRepo;
use App\Http\Controllers\Controller;

class DesignerController extends Controller
{
	private $designer;

	public function __construct(DesignerRepo $designer)
	{
		$this->designer = $designer;
	}

    public function index()
    {
        $designers = $this->designer->pageByGallery(8);
        $stars = $this->designer->feedBackList(10);
        $galleries = $this->designer->newGalleries(6);
        return view('frontend.design.index', compact('designers', 'stars', 'galleries'));
    }

    public function show(\Gz\User\Designer $designer)
    {
        return view('frontend.design.show', compact('designer'));
    }
}
