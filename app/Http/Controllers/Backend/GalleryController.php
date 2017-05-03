<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Gz\Gallery\Repo\GalleryRepo;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
	private $gallery;

	public function __construct(GalleryRepo $gallery)
	{
		$this->gallery = $gallery;
	}

	public function index()
	{
		$this->validate(request(), [
				'type' => 'required|in:leader,working,design,inspection'
			]);
	    $galleries = $this->gallery->pageByType(request('type'), 4);
	    return view('backend.gallery.index', compact('galleries'));
	}

	public function show($id)
	{
	    $gallery = $this->gallery->byId($id);
	    return view('backend.gallery.show', compact('gallery'));
	}

	public function update($id)
	{
		$this->validate(request(), [
				'name' => 'required|min:2|max:200',
				'description' => 'required|min:10'
			]);
		$this->gallery->updateById($id, request(['name', 'description']));
		return redirect()->back()->withSuccess('更新成功！');
	}

	public function create()
	{
		$this->validate(request(), [
				'type' => 'required',
				'id' => 'required'
			]);
	    return view('backend.gallery.create', request(['type', 'id']));
	}

	public function store()
	{
	    $this->validate(request(), [
	    		'galleryable_id' => 'required|integer',
	    		'type' => 'required|in:'.$this->gallery->type(),
	    		'name' => 'required|string|min:2|max:255|unique:galleries',
	    		'description' => 'required|between:10,3000',
	    	]);
	    $input = request()->input();
	    if (request('type') === 'inspection') {
	    	$offer = \Gz\Project\Apply::findOrFail(request('galleryable_id'))->offer;
	    	$inspection =  \Gz\Project\Inspection::create(['offer_id' => $offer->id]);
	    	$input['galleryable_id'] = $inspection->id; 
	    }
	    $gallery = $this->gallery->create(request()->input());
	    return redirect('/backend/galleries?type='.request('type'))->with('success', '添加' . $gallery->name . '成功！');
	}

	public function destroy($id)
	{
		$this->gallery->delete($id);
    	return redirect()->back()->with('success', '删除成功！');
	}
    
}
