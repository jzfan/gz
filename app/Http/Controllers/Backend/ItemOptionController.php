<?php

namespace App\Http\Controllers\Backend;

use Gz\Item\Item;
use Gz\Item\ItemOption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemOptionController extends Controller
{
	private $option;
	private $rule;

	public function __construct(ItemOption $option)
	{
		$this->option = $option;
		$this->rule = [
			'title' => 'required|min:2,max:255',
			'description' => 'required|array',
			'unit' => 'required|string|min:1,max:255',
			'price' => 'required|numeric'
		];
	}

    public function destroy($id)
    {
        $this->option->destroy($id);
        return redirect()->back()->with('success', '删除选项成功！');
    }

    public function edit($id)
    {
        // dd(old('description'));
        $option = $this->option->find($id);
        return view('backend.item.edit-option', compact('option'));
    }

    public function update($id)
    {
        $this->validate(request(), $this->rule);
        $this->option->findOrFail($id)->update([
        		'title' => request('title'),
        		'description' => array_filter(request('description')),
        		'unit' => request('unit'),
        		'price' => request('price'),
        	]);
        return redirect('/items/'.$id)->with('success', '更新项目成功！');
    }

    public function create($id)
    {
        $item = Item::findOrFail($id);
        return view('backend.item.create-option', compact('item'));
    }

    public function store()
    {
        $this->validate(request(), $this->rule);
        $this->option->create(array_merge(
        		request()->input(),
        		['description' => array_filter(request('description'))]
        	));
        return redirect('/items')->with('success', '添加项目选项成功！');
    }
}
