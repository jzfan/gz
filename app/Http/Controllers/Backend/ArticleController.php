<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Gz\Article\Repo\ArticleRepo;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
	private $article;
    private $rule = [
                'title' => 'required|min:4,max:100',
                'intro' => 'required|min:10',
                'text' => 'required|min:10',
                'published_at' => 'required'
            ];

	public function __construct(ArticleRepo $article)
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
        $tags = $this->article->allTags();
        $article = $this->article->byId($id);
        return view('backend.article.edit', compact('article', 'tags'));
    }

    public function update($id)
    {
        $this->validate(request(), $this->rule);
        $this->article->updateBy($id, request()->input());
        // session()->flash('success', '更新成功！');
        return redirect('/backend/articles')->with('success', '更新成功！');
    }

    public function destroy($id)
    {
        $this->article->deleteBy($id);
        session()->flash('success', '删除成功！');
        return redirect()->back();
    }

    public function create()
    {
        $tags = $this->article->allTags();
        return view('backend.article.create', compact('tags'));
    }

    public function store()
    {
        $this->validate(request(), $this->rule);
        $this->article->store(\Auth::user()->id, request()->except('_token'));
        return redirect('/backend/articles')->with('success', '添加文章成功！');
    }
}
