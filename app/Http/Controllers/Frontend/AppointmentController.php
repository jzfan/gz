<?php

namespace App\Http\Controllers\Frontend;

use Gz\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
                'phone' => 'required|phone',
                'block' => 'required'
            ]);
        Appointment::create(request()->input());
        return redirect()->back();
    }
}
