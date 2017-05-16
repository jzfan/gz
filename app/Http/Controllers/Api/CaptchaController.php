<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
use App\Http\Controllers\Controller;

class CaptchaController extends Controller
{
	protected $builder;

	public function __construct(CaptchaBuilder $builder)
	{
		$this->builder = $builder;
	    $builder->build();
	}

	public function imgsrc()
	{
		session(['phrase' => $this->builder->getPhrase()]);
	    return response()->json(['src' => $this->builder->inline(), 'code'=>201]);		
	}
}
