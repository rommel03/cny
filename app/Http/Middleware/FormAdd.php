<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Validator as Validator;

class FormAdd {

	
	/**
	* Handle an incoming request.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \Closure  $next
	* @return mixed
	*/

	public function handle($request, Closure $next)
	{
		$inputs = $request->input('clinic');
		unset($inputs['submit']);

		print_r($inputs);
		$validator = Validator::make(
						$inputs,
						['name' => 'required|min:5','street' => 'required|min:5',
							'city' => 'required|min:5','zip_code' => 'required|min:5']
					);
		if ($validator->fails())
		{
			return redirect("dashboard/clinic/add")->withErrors($validator->errors());
		}	
		print_r($validator->messages());
		exit;
		return $next($request);
	}
	
}
