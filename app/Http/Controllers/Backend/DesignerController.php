<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Gz\User\Repo\DesignerRepo;
use App\Http\Controllers\Controller;

class DesignerController extends Controller
{
	protected $designer;

	public function __construct(DesignerRepo $designer)
	{
		$this->designer = $designer;
	}

    public function index()
    {
    	$designers = $this->designer->getPage(10);
    	return view('backend.designer.index', compact('designers'));
    }
}
