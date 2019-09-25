<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageSkillController extends Controller
{
	public function index()
	{
		return view('manage_skill');
	}
}
