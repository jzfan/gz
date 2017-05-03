<?php

namespace App\Http\Controllers\Frontend;

use Gz\User\User;
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
        $user = User::findOrFail($id);
        if ($user->leader == null) {
            return redirect()->back();
        }
    	$leader = $this->leader->showById($id);
    	$tops = $this->leader->tops(4);
        $certificates = $user->certificates()->latest()->take(6)->get();
        $workings = $user->leaderApplies()
                ->has('gallery')->with('gallery')->take(6)->get();
        // dd($working_galleries->first()->toArray());
        return view('frontend.user.gzshow', compact('leader', 'tops', 'certificates', 'workings'));
    }    

    public function index()
    {
        $points_list = $this->leader->latestBy('points', 6); 
        $rank_list = $this->leader->latestBy('rank', 6); 
        $WO_list = $this->leader->latestBy('WO', 6);
        return view('frontend.user.gzlist', compact('points_list', 'rank_list', 'WO_list'));
    }

    public function likeName()
    {
        $this->validate(request(), [
                'name' => 'required'
            ]);
        $result = $this->leader->likeName(request('name'));
        return view('frontend.user.gz-result', compact('result'));
    }
}
