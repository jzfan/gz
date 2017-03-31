<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use My\Project\Repo\DecorationRepo;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
	private $decoration;

	public function __construct(DecorationRepo $decoration)
	{
		$this->decoration = $decoration;
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
        $decorations = $this->decoration->pageByStatus($arr[$status]);
        return view('backend.project.decoration', compact('decorations'));
    }
}
