<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entry;

class GuestController extends Controller
{
    public function index()
	{
		//dd('GuestController');
		$entries = Entry::all();
		return view('welcom', compact('entries'));
	}
}
