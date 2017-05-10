<?php

namespace App\Http\Controllers\Backend;

use Gz\Appointment;
use Illuminate\Http\Request;
use Gz\Project\Repo\ApplyRepo;
use Gz\Project\Repo\OfferRepo;
use Gz\User\Repo\CustomerRepo;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    private $customer;
	private $apply;
    protected $offer;
    protected $appointment;

	public function __construct(CustomerRepo $customer, ApplyRepo $apply, OfferRepo $offer, Appointment $appointment)
	{
        $this->customer = $customer;
		$this->apply = $apply;
        $this->offer = $offer;
        $this->appointment = $appointment;
	}

    public function dashboard()
    {
        $customers_count = $this->customer->newCountB4Days(3);
        $applies_count = $this->apply->newCountB4Days(3);
    	$appointments_count = $this->appointment->newCountB4Days(3);
    	return view('backend.console.dashboard', compact('customers_count', 'applies_count', 'appointments_count'));
    }

    public function editorConsole()
    {
    	$customers_count = $this->customer->count();
    	return view('backend.console.editor', compact('customers_count'));
    }
}
