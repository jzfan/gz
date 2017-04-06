<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use My\Project\Repo\ApplyRepo;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
	private $apply;

	public function __construct(ApplyRepo $apply)
	{
		$this->apply = $apply;
	}

    public function pageByStatus($status)
    {
        $arr = [
            'applies' => '申请',
            'offers' => '报价',
            'pending' => '审核',
            'working' => '施工',
            'done' => '完工',
        ];
        $applies = $this->apply->pageByStatus($arr[$status]);
        return view('backend.apply.index', compact('applies'));
    }
}
