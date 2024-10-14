<?php

namespace Modules\Friends\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\RouteDiscovery\Attributes\Route;

class FriendsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	#[Route('/friends')]
	public function index()
	{
		return view('friends::index');
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('friends::create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request): RedirectResponse
	{
		//
	}

	/**
	 * Show the specified resource.
	 */
	public function show($id)
	{
		return view('friends::show');
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($id)
	{
		return view('friends::edit');
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, $id): RedirectResponse
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id)
	{
		//
	}
}
