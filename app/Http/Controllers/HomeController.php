<?php

namespace App\Http\Controllers;
use DB;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
		$all_mamber= DB::table('all_mamber')->count();
		$latest_news= DB::table('latest_news')->count();
		$gallery= DB::table('gallery')->count();
		$blood_donation= DB::table('blood_donation')->count();
     	$all_notice= DB::table('noticebord')->latest()->first();
		 return view('pages.admin.home',compact('all_mamber','latest_news','gallery','blood_donation','all_notice'));
		// return view('layouts.master');
	}
}
