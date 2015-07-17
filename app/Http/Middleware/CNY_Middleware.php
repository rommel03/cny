<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\User;

class CNY_Middleware  {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		
		$user    = new User;
		$id      = Auth::user()->id;
		if(!$user->find($id)->is_complete)
		{
			return new RedirectResponse(url("dashboard/clinic/add"));
		}
		
		return $next($request);
	}

}
