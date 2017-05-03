<?php

namespace App\Http\Controllers\Backend;

use Gz\User\Repo\WorkerRepo;
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

    public function edit($id)
    {
    	$worker = $this->worker->byId($id);
        return view('backend.user.worker-edit', compact('worker'));
    }

    public function update($id)
    {
        $input = request()->input();
        if (request()->hasFile('avatar')) {
            $input = array_merge(
                        $input, 
                        [ 'avatar' => '/' . str_replace('public', 'storage', request('avatar')->store('public/avatar')) ]
                    );
        }
    	$this->worker->updateById($id, $input);
        return redirect('/backend/workers')->withSuccess('更新成功！');
    }
}
