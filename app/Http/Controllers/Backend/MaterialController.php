<?php

namespace App\Http\Controllers\Backend;

use Gz\Item\Material;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialController extends Controller
{
	private $material;

	public function __construct(Material $material)
	{
		$this->material = $material;
	}

    public function store()
    {
        $this->validate(request(), [
        		'name' => 'required|min:2,max:60',
        		'brand' => 'required|min:2,max:60',
        		'unit' => 'required|min:2,max:60',
        		'price' => 'required|numeric'
        	]);
        $this->material->create(request()->input());
        return redirect('materials')->with('success', '新增辅材成功！');
    }

    public function index()
    {
        $materials = $this->material->orderBy('name', 'asc')->get();
        return view('backend.page.materials', compact('materials'));
    }

    public function destroy($id)
    {
        $this->material->destroy($id);
        return redirect('materials')->with('success', '删除辅材成功！');
    }
}
