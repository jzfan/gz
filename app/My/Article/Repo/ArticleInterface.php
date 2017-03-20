<?php

namespace My\Article\Repo;

interface ArticleInterface
{
	public function byPage($page=1, $limit=10);

	public function byId($id);

	public function byTag($tag, $page=1, $limit=10);
}
