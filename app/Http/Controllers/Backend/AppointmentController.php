<?php

namespace App\Http\Controllers\Backend;

use Gz\Project\Appointment;
use Illuminate\Http\Request;
use Gz\User\Repo\LeaderRepo;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
	private $appointment;
	private $leader;

	public function __construct(Appointment $appointment, LeaderRepo $leader)
	{
		$this->appointment = $appointment;
		$this->leader = $leader;
	}

    public function index()
    {
        $appointments = $this->appointment->with('leader')->orderBy('leader_id', 'asc')->latest()->paginate(10);
        $leaders = $this->leader->select2();
        return view('backend.page.appointments', compact('appointments', 'leaders'));
    }

    public function giveLeader($id)
    {
        $this->validate(request(), [
        		'leader_id' => 'required|integer'
        	]);
        $this->appointment->findOrFail($id)->update(['leader_id' => request('leader_id')]);
        return redirect()->back()->with('success', '分配成功！');
    }
}
