<?php

namespace App\Http\Controllers\Backend;

use Gz\Article\Ask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AskController extends Controller
{
    public function index()
    {
    	$asks = Ask::all();
    	return view('backend.article.asks', compact('asks'));
    }

    public function update($id)
    {
    	Ask::findOrFail($id)->update(request()->input());
    	return redirect()->back()->with('success', '更新成功！');
    }
}
