<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class addClinicRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return ['clinic.logo'=>'image','clinic.name' => 'required','clinic.street' => 'required','clinic.city' => 'required','clinic.zip_code' => 'required'];
	}

}
