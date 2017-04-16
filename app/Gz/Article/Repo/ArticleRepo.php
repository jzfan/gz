<?php

namespace Gz\Article\Repo;

use Gz\Article\Tag;
use Gz\Article\Article;

class ArticleRepo
{
	private $article;
	private $tag;

	public function __construct(Article $article, Tag $tag)
	{
		$this->article = $article;
		$this->tag = $tag;
	}

	public function byTagPage($tag, $n)
	{
		return $this->article->with('tags', 'user')
							->whereHas('tags', function ($q) use ($tag) {
								$q->whereName($tag);
							})->OrderBy('published_at', 'desc')
    						->paginate($n);
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

	public function withNeibough($id)
	{
	    $article = $this->byId($id);
	    $article->prev = $this->article->where('id', '<', $article->id)->orderBy('id', 'desc')->first()->id ?? null;
	    $article->next = $this->article->where('id', '>', $article->id)->orderBy('id', 'asc')->first()->id ?? null;
	    return $article;
	}

	public function byId($id)
	{
	    return $this->article->published()->with('tags')->find($id);

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

	public function newList($n)
	{
	    return $this->article->with('user')->orderBy('published_at', 'desc')->take($n)->get();
	}

	public function updateBy($id, $input)
	{
		$tags = $this->firstOrCreateTag($input['tags']);
	    return $this->syncTagById($id, $tags)->update($input);
	}

	public function deleteBy($id)
	{
	    return $this->byId($id)->delete();
	}

	public function store($uid, $input)
	{
		$tag_ids = $this->firstOrCreateTag($input['tags']);
	    $article = $this->article->create(array_merge($input, ['user_id' => $uid]));
	    return $this->syncTagById($article->id, $tag_ids);
	}

	protected function firstOrCreateTag($inputTag) : array
	{
		$tags = explode(',', $inputTag);
		$tag_ids = array_map(function ($tag) {
			return $this->tag->firstOrCreate(['name'=>$tag])->id;
		}, $tags);
		return $tag_ids;
	}

	protected function syncTagById($id, $tag_ids)
	{
	    $article = $this->article->findOrFail($id);
	    $article->tags()->sync($tag_ids);
	    return $article;
	}

	public function allTags()
	{
	    return $this->tag->select('id', 'name')->get();
	}
}
