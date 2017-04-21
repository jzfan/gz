<?php

namespace App\Http\Controllers\Backend;

use Gz\Gallery\Image;
use Illuminate\Http\Request;
use Gz\Gallery\Repo\GalleryRepo;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
	protected $gallery;

	public function __construct(GalleryRepo $gallery)
	{
		$this->gallery = $gallery;
	}


	public function store()
	{
		$this->validate(request(), [
				'gallery_id' => 'required|exists:galleries,id',
				'name' => 'required|min:2|max:255',
				'pic' => 'required|image'
			]);
		$path = '/' .str_replace('public', 'storage', request('pic')->store('public/gallery'));
		$this->gallery->storeImageById(request('gallery_id'), array_merge(
				request(['name']),
				['path' => $path]
			));
    	return redirect()->back()->with('success', '添加图片成功！');
	}

	public function destroy($id)
	{
		Image::destroy($id);
		return redirect()->back()->with('success', '删除成功！');
	}

	public function update($id)
	{
		$this->validate(request(), [
				'name' => 'required|unique:images,name,' . $id
			]);
		Image::findOrFail($id)->update(request(['name']));
		return redirect()->back()->with('success', '更新成功！');
	}
}
