<?php

namespace App\Http\Controllers\Frontend;

use Gz\User\Repo\WorkerRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkerController extends Controller
{
	protected $worker;

	public function __construct(WorkerRepo $worker)
	{
		$this->worker = $worker;
	}

    public function index()
    {
    	$workers = $this->worker->byPage(10);
    	$crafts_list = $this->worker->byCrafts(5);
    	return view('frontend.user.workers', compact('workers', 'crafts_list'));
    }

    public function show(\Gz\User\Worker $worker)
    {
    	$crafts_list = $this->worker->byCrafts(5);
    	return view('frontend.user.workers-show', compact('worker', 'crafts_list'));
    }
}
