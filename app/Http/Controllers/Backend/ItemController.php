<?php

namespace App\Http\Controllers\Backend;

use Gz\Item\Repo\ItemRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
	private $item;

	public function __construct(ItemRepo $item)
	{
		$this->item = $item;
	}

	public function index()
	{
	    $items = $this->item->byPage(10);
	    return view('backend.item.index', compact('items'));
	}

	public function destroy($id)
	{
	    $this->item->deleteWithOption($id);
	    return redirect()->back()->with('success', '删除项目成功！');
	}

	public function store()
	{
	    $this->validate(request(), [
	    		'name' => 'required|min:2,max:255',
	    	]);

	    $this->item->store(request()->except('_token'));
	    return redirect()->back()->with('success', '添加项目成功！');
	}

	public function show($id)
	{
	    $item = $this->item->find($id);
	    return view('backend.item.show', compact('item'));
	}

}
