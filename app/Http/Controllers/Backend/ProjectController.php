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

    public function index()
    {
        $decorations = $this->decoration->byPage();
        // dd($decorations->all());
        return view('backend.project.decoration', compact('decorations'));
    }
}
