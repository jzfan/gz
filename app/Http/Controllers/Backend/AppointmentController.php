<?php

namespace App\Http\Controllers\Backend;
use Gz\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::paginate(10);
        return view('backend.page.appointments', compact('appointments'));
    }

    public function destroy($id)
    {
        Appointment::destroy($id);
        return redirect()->back()->with('success', '删除成功！');
    }
}
