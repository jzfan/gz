<?php

namespace App\Http\Controllers\Backend;

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

    public function giveLeader($id, $leader_id)
    {
        $this->apply->giveLeader($id, $leader_id);
        return redirect()->back()->with('success', 'ok');
    }

    public function show($id)
    {
        $apply = $this->apply->byId($id);
        $leaders = \My\User\User::where('role', 'leader')->select('id', 'name')->get();
        return view('backend.apply.show', compact('apply', 'leaders'));
    }
}
