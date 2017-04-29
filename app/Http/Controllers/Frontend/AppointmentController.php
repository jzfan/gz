<?php

namespace App\Http\Controllers\Frontend;

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
        dd(request()->all());
    }
}
