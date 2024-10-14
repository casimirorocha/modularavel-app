<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\RouteDiscovery\Attributes\Route;

class AuthController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	#[Route(name: 'login.show')]
	public function index()
	{
		return view('auth::livewire.pages.auth.login');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	#[Route(name: 'login.store')]
	public function store(Request $request): RedirectResponse
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	#[Route(name: 'login.destroy')]
	public function destroy($id)
	{
		//
	}
}
