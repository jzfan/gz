<?php

namespace App\Http\Controllers\Frontend;

use Gz\User\Repo\LeaderRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeaderController extends Controller
{
	private $leader;

	public function __construct(LeaderRepo $leader)
	{
		$this->leader = $leader;
	}
	public function show($id)
    {
    	$leader = $this->leader->showById($id);
    	$tops = $this->leader->tops(4);
    	// dd($tops);
        return view('frontend.user.gzshow', compact('leader', 'tops'));
    }    
}
