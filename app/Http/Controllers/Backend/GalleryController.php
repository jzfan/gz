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
	    $galleries = $this->gallery->indexPage(4);
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
	    		'group' => 'required|min:2|max:100',
	    		'title' => 'required|string|min:2|max:255',
	    		'pic' => 'required|mimes:svg,jpg,jpeg,png,gif',
	    	]);
	    $path = '/' .str_replace('public', 'storage', request('pic')->store('public/gallerys'));
	    if (request('type') == 'offer') {
	    	$this->gallery->create( array_merge(
	    			request()->input(),
	    			[
	    				'galleryable_type' => 'Gz\Project\Offer',
	    				'galleryable_id' => request('id'),
	    				'path' => $path
	    			]
	    		));
	    	return redirect('/backend/galleries')->with('success', '添加图片成功！');
	    }

	}

	public function storeImage()
	{
		// dd(request()->all());
		$this->validate(request(), [
				'gallery_id' => 'required|exists:galleries,id',
				'name' => 'required|min:2|max:255',
				'pic' => 'required|mimes:jpeg,bmp,png',
			]);
		$path = '/' .str_replace('public', 'storage', request('pic')->store('public/gallery'));
		$this->gallery->storeImageById(request('gallery_id'), array_merge(
				request(['name']),
				['path' => $path]
			));
    	return redirect('/backend/galleries')->with('success', '添加图片成功！');
	}
    
}
