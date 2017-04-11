<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Gz\Project\Apply;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
	private $apply;

	public function __construct(Apply $apply)
	{
		$this->appointment = $apply;
	}

    public function store()
    {
        $this->validate(request(), [
        		'name' => 'required|between:2,60',
        		'phone' => 'required|integer|between:13000000000,19000000000',
        		'plan' => 'required|in:全装修,半装修,待定',
        		'block' => 'required|between:2,60'
        	]);
        $apply = $this->appointment->create(request()->except('_token'));
        return response()->json(['data' => $apply, 'code' => 201]);
    }
}
