<?php

namespace App;

use Bladerunner\Controller;
use WPEloquent\Model\Post;


class Index extends Controller
{
	protected $view='views.pages.index';

	public function post()
	{
		return Post::find(1);
	}
}