<?php

namespace App\Http\Controllers\Backend;

use Gz\Article\Flow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlowController extends Controller
{
    public function index()
    {
        $flows = Flow::all();
        return view('backend.article.flows', compact('flows'));
    }

    public function update($id)
    {
        $flow = Flow::findOrFail($id);
        $flow->update(request()->input());
        return redirect()->back()->with('success', '更新成功！');
    }
}
