<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use My\Project\Appointment;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
	private $appointment;

	public function __construct(Appointment $appointment)
	{
		$this->appointment = $appointment;
	}

    public function store()
    {
        $this->validate(request(), [
        		'name' => 'required|between:2,60',
        		'phone' => 'required|integer|between:13000000000,19000000000',
        		'plan' => 'required|in:全装修,半装修,待定',
        		'block' => 'required|between:2,60'
        	]);
        $appointment = $this->appointment->create(request()->except('_token'));
        return response()->json(['data' => $appointment, 'code' => 201]);
    }
}
