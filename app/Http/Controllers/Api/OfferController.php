<?php

namespace App\Http\Controllers\Api;

use Gz\Project\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{

    public function getOne($id)
    {
    	return Offer::findOrFail($id);
    }
}
