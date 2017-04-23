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

    public function edit($id)
    {
    	$leader = $this->leader->byId($id);
    	return view('backend.user.leader-edit', compact('leader'));
    }

    public function update($id)
    {
        $path = '/' . str_replace('public', 'storage', request('avatar')->store('public/avatar'));
    	$this->leader->updateById($id, array_merge(
                request()->input(),
                ['avatar' => $path]
                ));
        return redirect('/backend/leaders')->withSuccess('更新成功！');
    }
}
