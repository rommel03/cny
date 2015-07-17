<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ClinicModel extends Model {

	protected $table = 'clinic';

	function get_all_clinics($user_id)
	{
		return $this->where('user_id','=',$user_id)->get();
	}

	function add_clinic($data)
	{
		$this->user_id  		= $data['user_id'];
		$this->name 			= $data["name"];
		$this->street 			= $data["street"];
		$this->city 			= $data["city"];
		$this->zip_code 		= $data["zip_code"];
		$this->phone 			= $data["phone"];
		$this->contact_person 	= $data["contact_person"];
		$this->tag_line 		= $data["tag_line"]; 
		$this->save();
		return $this->id;
	}

	public function add_logo($data)
	{
		$this->id 					= $data['id'];
		$this->logo 				= $data['logo'];
		$this->logo_new_filename 	= $data['logo_new_filename'];
		$this->save();
	}

	
}

