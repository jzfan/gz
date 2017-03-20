<?php

namespace My\Article\Repo;

use Illuminate\Database\Eloquent\Model;

class EloquantArticle implements ArticleInterface
{
	private $article;
	private $tag;

	public function __construct(Model $article, Model $tag)
	{
		$this->article = $article;
		$this->tag = $tag;
	}

	public function byPage($page=1, $limit=10)
	{
	    $data = new \StdClass;
	    $data->items = $this->article->published()
	    						->with('tags', 'editor')
	    						->OrderBy('published_at', 'desc')
	    						->skip( $limit * ($page-1) )
	    						->take($limit)
	    						->get()->all();
	    $data->total = $this->totalArticles();

	    return $data;
	}

	public function byTag($tag, $page=1, $limit=10)
	{
	    $data = new \StdClass;
		$tag = $this->tag->whereTag($tag)->first();
		if ( ! $tag ) {
			$data->items = [];
			$data->total = 0;
		} else {			
		    $data->items = $this->tag->articles()
		    					->with('tags', 'editor')
		    					->get()
		    					->all();
		    $data->total = $this->totalByTag($tag);
		}
	    return $data;
	}

	public function byId($id)
	{
	    return $this->article->published()->find($id);
	}

	protected function totalArticles()
	{
	    return $this->article->published()->count();
	}

	protected function totalByTag($tag)
	{
		$tag = $this->tag->whereTag($tag)->first();
		return $tag->articles()->published()->count();
	}
}
