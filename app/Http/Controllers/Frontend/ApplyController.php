<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Gz\Project\Repo\ApplyRepo;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
	private $apply;

	public function __construct(ApplyRepo $apply)
	{
		$this->apply = $apply;
	}

    public function show($id)
    {
        $site = $this->apply->byId($id);
        return view('frontend.apply.site', compact('site'));
    }

    public function store()
    {
        $this->validate(request(), [
                'name' => 'required|min:2,max:60',
                'block' => 'required|min:2,max:60',
                'phone' => 'required|phone',
                'square' => 'required'
            ]);
        $this->apply->store(request()->input());
        return redirect()->back()->withSuccess('ok');
    }
     
}
