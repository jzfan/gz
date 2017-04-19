<?php

namespace App\Http\Controllers\Backend;

use Gz\Gallery\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
	private $image;

	public function __construct(Image $image)
	{
		$this->image = $image;
	}

	public function index()
	{
	    $galleries = $this->image->select(\DB::raw('count(*) as image_count, `group`'))
                     ->groupBy('group')
                     ->get()->map( function ($gallery) {
                     	$gallery->page_image = $this->image->whereGroup($gallery->group)
                     										->latest()->first()->path;
                     	return $gallery;
                     });
	    return view('backend.gallery.index', compact('galleries'));
	}

	public function show($group)
	{
	    $images = $this->image->whereGroup($group)->paginate(5);
	    return view('backend.gallery.show', compact('images'));
	}

	public function update($group)
	{
		$this->validate(request(), [
				'group' => 'required|min:2|max:200'
			]);
		$this->image->whereGroup($group)->update(request(['group']));
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
	    $path = '/' .str_replace('public', 'storage', request('pic')->store('public/images'));
	    if (request('type') == 'offer') {
	    	$this->image->create( array_merge(
	    			request()->input(),
	    			[
	    				'imageable_type' => 'Gz\Project\Offer',
	    				'imageable_id' => request('id'),
	    				'path' => $path
	    			]
	    		));
	    	return redirect('/backend/galleries')->with('success', '添加图片成功！');
	    }

	}
    
}
