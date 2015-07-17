<?php namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class PatientController extends Controller {

	public $_name = "patient";

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("dashboard.patient.index");
		
	}

	public function addView()
	{
		return view("dashboard.patient.add_form");
	}

}
