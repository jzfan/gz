<?php

namespace App\Http\Controllers\Backend;

use Gz\Article\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return view('backend.article.cards', compact('cards'));
    }

    public function update($id)
    {
        $card = Card::findOrFail($id);
        $card->update(request()->input());
        return redirect()->back()->with('success', '更新成功！');
    }
}
