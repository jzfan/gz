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

    public function create()
    {
        return view('backend.designer.create');
    }

    public function store()
    {
        $this->validate(request(), [
        		'name' => 'required|between:2,100',
        		'avatar' => 'required|image',
        		'working_age' => 'required|integer|between:1,99',
        		'honor' => 'required|array',
        		'good_at' => 'required|array',
        		'company' => 'required|string|between:4,255',
        		'feedback_rate' => 'required|integer|between:0,100',
        	]);
        // dd(request()->all());
        $path = '/' . str_replace('public', 'storage', request('avatar')->store('public/avatar'));
        $this->designer->create( array_merge(
        	request()->input(),
        	['avatar' => $path]
        	));
        return redirect('/backend/designers')->with('success', '新增设计师'.request('name').'成功！');
    }

    public function edit($id)
    {
        $designer = $this->designer->find($id);
        return view('backend.designer.edit', compact('designer'));
    }
}
