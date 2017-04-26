<?php

namespace App\Http\Controllers\Backend;

use Gz\Project\Apply;
use Illuminate\Http\Request;
use Gz\User\Repo\LeaderRepo;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
    private $apply;
    private $leader;

    public function __construct(Apply $apply, LeaderRepo $leader)
    {
        $this->apply = $apply;
        $this->leader = $leader;
    }

    public function index()
    {
        $applies = $this->apply->with('leader')->orderBy('leader_id', 'asc')->latest()->paginate(10);
        $leaders = $this->leader->select2();
        return view('backend.page.applies', compact('applies', 'leaders'));
    }

    public function giveLeader($id)
    {
        $this->validate(request(), [
                'leader_id' => 'required|integer|exists:users,id,role,leader'
            ]);
        $this->apply->findOrFail($id)->update(['leader_id' => request('leader_id')]);
        return redirect()->back()->with('success', '分配成功！');
    }

}
