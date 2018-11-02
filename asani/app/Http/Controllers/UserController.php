<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
	public function getUser()
	{
		$user = DB::table('user')->select('user_id', 'phone_number', 'user_name', 'credit_score', 'created_time', 'status')->get();
            return view('admin.data', ['user' => $user]);
	}
    //

    
}
