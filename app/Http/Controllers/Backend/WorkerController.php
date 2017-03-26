<?php

namespace App\Http\Controllers\Backend;

use My\User\Repo\WorkerRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkerController extends Controller
{
	private $worker;

	public function __construct(WorkerRepo $worker)
	{
		$this->worker = $worker;
	}


    public function index()
    {
        $workers = $this->worker->byPage(6);
        return view('backend.user.workers', compact('workers'));
    }
}
