<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageSkillController extends Controller
{
	public function __construct()
		{
			$this->middleware('check');

		}
	public function index()
	{
		return view('error_pages.skill_page');
		// return view('manage_skill');
	}
}
