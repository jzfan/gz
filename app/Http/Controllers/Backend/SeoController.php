<?php

namespace App\Http\Controllers\Backend;

use Gz\Seo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeoController extends Controller
{
	private $seo;

	public function __construct(Seo $seo)
	{
		$this->seo = $seo;
	}

    public function index()
    {
        $seos = $this->seo->all();
        return view('backend.console.seo', compact('seos'));
    }

    public function store()
    {
        $this->validate(request(), [
        		'key' => 'required|min:2|max:255',
        		'value' => 'required|min:2|max:255',
        	]);
        $this->seo->create(request(['key', 'value']));
        return redirect()->back()->withSuccess('新增成功！');
    }

    public function update($id)
    {
        $this->seo->findOrFail($id)->update(request(['key', 'value']));
        return redirect()->back()->withSuccess('更新成功！');
    }
}
