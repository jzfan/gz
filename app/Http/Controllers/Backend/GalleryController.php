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
    
}
