<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	//
	public function set_active($user_id)
	{
		
		$user = $this->find($user_id);
		if(!$user->is_complete)
		{
			$user->is_complete = 1;
			$user->save();	
		}
		
	}
}
