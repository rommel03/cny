<?php namespace App\Http\Controllers\Dashboard;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\addClinicRequest;
use Illuminate\Support\Facades\Session;
use App\models\ClinicModel;
use Illuminate\Support\Facades\Auth;
use App\models\User;
use Illuminate\Http\RedirectResponse;

class ClinicController extends Controller {

	public $_name = "clinic";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clinicModel = new clinicModel;
		$user_id = Auth::user()->id;
		$clinics = $clinicModel->get_all_clinics($user_id);
		
		return view("dashboard.clinic.list")
				->with(['title' => 'Clinic List','clinics'=>$clinics]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function addView()
	{
		return view("dashboard.clinic.form")
				->with(['title' => 'Add Clinic']);
	}

	public function addProcess(addClinicRequest $request)
	{
		$userId = Auth::user()->id;
		$dir = public_path();
		$dir .="/users";
		if(!is_dir($dir)) mkdir($dir, 0775);
		$dir .="/doctors";
		if(!is_dir($dir)) mkdir($dir, 0775);
		$dir .="/clinic";
		if(!is_dir($dir)) mkdir($dir, 0775);
		$dir .="/".$userId;
		if(!is_dir($dir)) mkdir($dir, 0775);


		$clinicModel = new ClinicModel;

		$data = array(
				"name" => $request->input("clinic.name"), "street" => $request->input("clinic.street"),
				"city" => $request->input("clinic.city"), "zip_code" => $request->input("clinic.zip_code"),
				"phone" => $request->input("clinic.phone"), "contact_person" => $request->input("clinic.contact_person"),
				"tag_line" => $request->input("clinic.tag_line"), "user_id" => $userId
			);
		$id = $clinicModel->add_clinic($data);

		if($request->hasFile('clinic.logo') && $request->file('clinic.logo')->isValid())
		{
			$file_name = $request->file('clinic.logo')->getClientOriginalName();
			$ext = $request->file('clinic.logo')->getClientOriginalExtension();
			$new_filename = $request->file("clinic.logo")->getFileName();
			$new_filename = $new_filename.".".$ext;

			$request->file("clinic.logo")->move($dir, $new_filename);

			$logo_data = array("logo"=>$file_name, "logo_new_filename" => $new_filename, "id"=>$id);
			$clinicModel->add_logo($logo_data);

		}

		$userModel = new User;
		$user = $userModel->find($userId);
		if(!$user->is_complete)
		{
			Session::flash('account_complete', 'Other features are now accessible');
			$userModel->set_active($userId);
		}
		
		Session::flash('add_clinic_success', 'Successfully added new clinic record');
		return new RedirectResponse(url("dashboard/clinic/add"));

	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
