<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Gz\User\Repo\LeaderRepo;
use App\Http\Controllers\Controller;

class LeaderController extends Controller
{
	private $leader;

	public function __construct(LeaderRepo $leader)
	{
		$this->leader = $leader;
	}


    public function index()
    {
        $leaders = $this->leader->byPage(6);
        return view('backend.user.leaders', compact('leaders'));
    }
}
