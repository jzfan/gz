<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use My\Article\Repo\ArticleInterface;

class ArticleController extends Controller
{
	private $article;

	public function __construct(ArticleInterface $article)
	{
		$this->article = $article;
	}

    public function index()
    {
        $articles = $this->article->byPage(10);
        return view('backend.article.index', compact('articles'));
    }

    public function byTag($tag)
    {
        $articles = $this->article->byTag($tag);
        dd($articles);
    }

    public function show($id)
    {
        $article = $this->article->withNeibough($id);
        return view('backend.article.show', compact('article'));
    }

    public function edit($id)
    {
        $article = $this->article->byId($id);
        return view('backend.article.edit', compact('article'));
    }

    public function update($id, Request $request)
    {
        $this->article->updateBy($id, $request->input());
        session()->flash('success', '更新成功！');
        return redirect('/backend/articles');
    }

    public function destroy($id)
    {
        $this->article->deleteBy($id);
        session()->flash('success', '删除成功！');
        return redirect()->back();
    }

    public function create()
    {
        return view('backend.article.create');
    }
}
